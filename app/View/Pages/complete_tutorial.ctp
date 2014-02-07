<script>
    var ref = document.referrer;
    function referralCheck(){
        if  ( ref === "http://archivalproject.org/pages/interactive_tutorial" ) {
            document.getElementById('showGood').style.display = "inline";
        }
        else {
            document.getElementById('showBad').style.display = "inline";
        }
    }
    var d=new Date();
</script>

<div class="container">
    <div class="row">
        <div class="span10">
            <div id="showGood" style="display:none">
                <h1>Tutorial Complete</h1>
                    <br>
                    <p>Print this page or save as a PDF to send to your professor.</p>
                    <p>This tutorial was completed on <script> document.write(d);</script>.</p>
            </div>
            <div id="showBad" style="display:none">
                <h1>Cannot access this page without
                <a href="http://archivalproject.org/pages/interactive_tutorial">completing tutorial first</a>.</h1>
                <p>If you believe you recieved this message by mistake, email Johanna Cohoon at johanna@cos.io.</p>
            </div>
        </div>
        <script>referralCheck()</script>
    </div>
</div>