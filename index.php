    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    let basic = btoa('z:z');
        $.ajax({
            url: "/request.php",
            type: 'POST',
            headers: { "Authorization": `Basic ${basic}`},
            success : function(response){
                document.write(response);
            }
        });
        $.ajax({
            url: "/request.php",
            type: 'POST',
            headers: { "Authorization": `Bearer someTokenYouInCode `},
            success : function(response){
                document.write(response);
            }
        });
    </script>
