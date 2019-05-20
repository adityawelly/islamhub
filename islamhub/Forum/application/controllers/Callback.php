<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Callback extends CI_Controller {

	function index(){
		$id = 'UPAMBON';
		$key = 'xZINK8pVbltMTW33qxv1wpG3vCuuUE7N';
		$secret = 'XQxDSJEJWn';
		$raw = $this->input->raw_input_stream;
		$headers = $this->input->request_headers();
		$string = "$id:$raw:$key";
		$signature = hash_hmac('sha256', $string, $secret);
		if ($headers['Content-Type'] == 'application/json' && $id == $headers['id'] && $key == $headers['key'] && $signature == $headers['signature']){
			$raw = json_decode($raw);
			$rules = array(
				'select'    => null,
				'where'     => array(
					'ref' => $raw->ref,
					'va' => $raw->va,
				), //not null or null
				'or_where'  => null, //not null or null
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$num_va = $this->Tbl_pmb_va->where($rules)->num_rows();
			if ($num_va == 0){
				$data = array(
					'ref' => '',
					'rsp' => '001',
					'rspdesc' => 'Account VA Not Found',
				);
				echo json_encode($data);
			}else{
				$num_cb = $this->Tbl_pmb_callback->where($rules)->num_rows();
				if ($num_cb == 0){
					$rules = array(
						'ref' => $raw->ref,
						'va' => $raw->va,
						'nama' => $raw->nama,
						'teller' => $raw->teller,
						'transcode' => $raw->transcode,
						'seq' => $raw->seq,
						'tgl' => $raw->tgl,
						'jam' => $raw->jam,
						'amount' => $raw->amount,
						'revflag' => $raw->revflag,
						'revseq' => $raw->revseq,
						'revjam' => $raw->revjam,
						'tagihan' => $raw->tagihan,
						'terbayar' => $raw->terbayar,
					);
					$this->Tbl_pmb_callback->create($rules);
					$rules = array(
						'kd_pembayaran' => $raw->ref,
						'uang' => $raw->amount,
						'id_bank' => 1,
						'status' => '0',
					);
					$this->Tbl_pmb_pembayaran->create($rules);
					$data = array(
						'ref' => $raw->ref,
						'rsp' => '000',
						'rspdesc' => 'Transction Success.',
					);
					echo json_encode($data);
				}else{
					$rules = array(
						'where' => array(
							'ref' => $raw->ref,
							'va' => $raw->va,
						),
						'data'  => array(
							'nama' => $raw->nama,
							'teller' => $raw->teller,
							'transcode' => $raw->transcode,
							'seq' => $raw->seq,
							'tgl' => $raw->tgl,
							'jam' => $raw->jam,
							'amount' => $raw->amount,
							'revflag' => $raw->revflag,
							'revseq' => $raw->revseq,
							'revjam' => $raw->revjam,
							'tagihan' => $raw->tagihan,
							'terbayar' => $raw->terbayar,
						),
					);
					$this->Tbl_pmb_callback->update($rules);
					$rules = array(
						'where' => array(
							'kd_pembayaran' => $raw->ref,
						),
						'data'  => array(
							'uang' => $raw->terbayar,
						),
					);
					$this->Tbl_pmb_pembayaran->update($rules);
					$data = array(
						'ref' => $raw->ref,
						'rsp' => '000',
						'rspdesc' => 'Transction Success.',
					);
					echo json_encode($data);
				}
			}
		}else{
			$data = array(
				'ref' => '',
				'rsp' => '998',
				'rspdesc' => 'Access Denied',
			);
			echo json_encode($data);
		}
	}
}
