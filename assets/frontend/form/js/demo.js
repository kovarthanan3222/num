
 <script>  

    //####### Datepicker
    $('#datepicker').datepicker({
        inline: true
    });

    //####### Slider

    // Horizontal slider
    $('#h-slider').slider({
        range: true,
        values: [17, 67]
    });

    // Vertical slider
    $("#v-slider").slider({
        orientation: "vertical",
        range: "min",
        min: 0,
        max: 100,
        value: 60,
        slide: function (event, ui) {
            $("#amount").val(ui.value);
        }
    });
    $("#amount").val($("#v-slider").slider("value"));

  </script>  
