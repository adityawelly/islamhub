<script type="text/javascript">

    /* Pradaftar */
    //P1
    setInterval(function(){
        $("#p1").show();
        $("#num_users").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P1/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_users").innerHTML = data.num_users;
                $("#p1").hide();
                $("#num_users").show();
            }
        });
    }, 10000);

    //P2
    setInterval(function(){
        $("#p2").show();
        $("#num_users_sv").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P2/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_users_sv").innerHTML = data.num_users_sv;
                $("#p2").hide();
                $("#num_users_sv").show();
            }
        });
    }, 10000);

    //P3
    setInterval(function(){
        $("#p3").show();
        $("#num_users_bv").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P3/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_users_bv").innerHTML = data.num_users_bv;
                $("#p3").hide();
                $("#num_users_bv").show();
            }
        });
    }, 10000);

    //P4
    setInterval(function(){
        $("#p4").show();
        $("#num_kategori_ipa").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P4/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_kategori_ipa").innerHTML = data.num_kategori_ipa;
                $("#p4").hide();
                $("#num_kategori_ipa").show();
            }
        });
    }, 10000);

    //P5
    setInterval(function(){
        $("#p5").show();
        $("#num_kategori_ips").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P5/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_kategori_ips").innerHTML = data.num_kategori_ips;
                $("#p5").hide();
                $("#num_kategori_ips").show();
            }
        });
    }, 10000);

    //P6
    setInterval(function(){
        $("#p6").show();
        $("#num_man").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P6/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_man").innerHTML = data.num_man;
                $("#p6").hide();
                $("#num_man").show();
            }
        });
    }, 10000);

    //P7
    setInterval(function(){
        $("#p7").show();
        $("#num_women").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P7/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_women").innerHTML = data.num_women;
                $("#p7").hide();
                $("#num_women").show();
            }
        });
    }, 10000);

    //P8
    setInterval(function(){
        $("#p8").show();
        $("#num_lulus").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P8/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_lulus").innerHTML = data.num_lulus;
                $("#p8").hide();
                $("#num_lulus").show();
            }
        });
    }, 10000);

    //P9
    setInterval(function(){
        $("#p9").show();
        $("#num_tidak_lulus").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P9/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_tidak_lulus").innerHTML = data.num_tidak_lulus;
                $("#p9").hide();
                $("#num_tidak_lulus").show();
            }
        });
    }, 10000);

    //P10
    setInterval(function(){
        $("#p10").show();
        $("#num_pembayaran").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P10/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_pembayaran").innerHTML = data.num_pembayaran + "<br>" + data.total;
                $("#p10").hide();
                $("#num_pembayaran").show();
            }
        });
    }, 10000);

    //P11
    setInterval(function(){
        $("#p11").show();
        $("#num_pembayaran_sv").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P11/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_pembayaran_sv").innerHTML = data.num_pembayaran_sv;
                $("#p11").hide();
                $("#num_pembayaran_sv").show();
            }
        });
    }, 10000);

    //P12
    setInterval(function(){
        $("#p12").show();
        $("#num_pembayaran_bv").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P12/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_pembayaran_bv").innerHTML = data.num_pembayaran_bv;
                $("#p12").hide();
                $("#num_pembayaran_bv").show();
            }
        });
    }, 10000);

    //P13
    setInterval(function(){
        $("#p13").show();
        $("#num_tmp_users").hide();
        $.ajax({
            type: 'GET',
            url: '<?=base_url('Dashboard/P13/')?>',
            data: { get_param: 'value' },
            dataType: 'json',
            success: function (data) {
                document.getElementById("num_tmp_users").innerHTML = data.num_tmp_users;
                $("#p13").hide();
                $("#num_tmp_users").show();
            }
        });
    }, 10000);

</script>