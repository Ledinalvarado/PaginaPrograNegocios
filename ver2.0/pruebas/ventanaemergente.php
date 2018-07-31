<style rel="stylesheet">
    .popup {
        background-color: #ffffff;
        color: #888888;
        height: 245px;
        left: 100%;
        padding: 20px;
        position: fixed;
        right: 30%;
        top: 25%;
        width: 550px;
        z-index: 101;
        -moz-box-shadow: 0px 0px 10px 1px #888888;
        -webkit-box-shadow: 0px 0px 10px 1px #888888;
        box-shadow: 0px 0px 10px 1px #888888;
        border-radius:10px;
        -moz-border-radius:10px;
    }

    .overlay {
        background: #000000;
        bottom: 0;
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 100;
        opacity:0.5;
    }

    a.close {
        background: url("cancel.png") repeat scroll left top transparent;
        cursor: pointer;
        float: right;
        height: 26px;
        left: 32px;
        position: relative;
        top: -33px;
        width: 26px;
    }
</style>
<a onclick="openDialog();">Mostrar Popup</a>
<div id="popup" class="popup">
    <a onclick="closeDialog('popup');" class="close"></a>
    <div>
        <!-- YOUR CONTENT -->
    </div>
</div>
<script type="text/javascript">
    function openDialog() {
        $('#overlay').fadeIn('fast', function() {
            $('#popup').css('display','block');
            $('#popup').animate({'left':'30%'},500);
        });
    }

    function closeDialog(id) {
        $('#'+id).css('position','absolute');
        $('#'+id).animate({'left':'-100%'}, 500, function() {
            $('#'+id).css('position','fixed');
            $('#'+id).css('left','100%');
            $('#overlay').fadeOut('fast');
        });
    }
</script>