

    $(document).on('change', '#statusValue', function() {


        var id,status;
        id = $('#idValue').attr('data-id');
        status = $('#statusValue').val();
        alert(id);
        alert(status);

        $.ajax({
            method: 'POST',
            url: 'admin/panel',
            data: {
                id: id,
                type: status
            },
            success: function(data){
                console.log(data);
            },
            error: function(e) {
                console.log(e);
            }
        });

    });
    $(document).ready(function() {
    //$('#statusValue').change(function(e) {
    //    var id=document.getElementById("statusValue").value;
    //
    //
    //    e.preventDefault();
    //
    //    $.ajax({
    //        type: "POST",
    //        url: "http://localhost/laravel/public/admin/panel",
    //        data: id,
    //        dataType:'json',
    //        success:function(data)
    //        {
    //        alert(data);
    //        }
    //
    //    })
    //});




    function countdown( elementName, minutes, seconds )
    {
        var element, endTime, hours, mins, msLeft, time;

        function twoDigits( n )
        {
            return (n <= 9 ? "0" + n : n);
        }

        function updateTimer()
        {
            msLeft = endTime - (+new Date);
            if ( msLeft < 1000 ) {
                element.innerHTML = "Prijatno";
                $('a').unbind('click');
            } else {

                $('a').bind('click', function(e){
                    e.preventDefault();
                })

                time = new Date( msLeft );
                hours = time.getUTCHours();
                mins = time.getUTCMinutes();
                element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
                setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
            }
        }

        element = document.getElementById( elementName );
        endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
        updateTimer();
    }

    var urlParams;
    (window.onpopstate = function () {
        var match,
            pl     = /\+/g,  // Regex for replacing addition symbol with a space
            search = /([^&=]+)=?([^&]*)/g,
            decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
            query  = window.location.search.substring(1);

        urlParams = {};
        while (match = search.exec(query))
            urlParams[decode(match[1])] = decode(match[2]);
    })();

    if( urlParams["timer"] == 'true'){

        countdown( "countdown", 5, 0 );

    } else{
        element = document.getElementById('countdown');
        element.innerHTML = "00:00";
    }

    $( ".profil" ).mouseover(function() {
        $( '.profil h1' ).animate({ fontSize: 75}, 300)});

    $( ".profil" ).mouseout(function() {
        $( '.profil h1' ).animate({ fontSize: 70}, 300)});




    //    $('.status').change(function(){
    //
    //e.preventDefault();
    //
    //
    //
    //
    //        $.ajax({
    //            type: "POST",
    //            url: url,
    //            data: $('.staus').val(),
    //            cache: false,
    //            success: function(data){
    //                return data;
    //            }
    //        });
    //        return false;
    //    });












});






//# sourceMappingURL=all.js.map