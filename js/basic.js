$(window).on("scroll", function() {
  if($(window).scrollTop() > 50) {
      $(".sticky-header").addClass("active");
  } else {
      //remove the background property so it comes transparent again (defined in your css)
     $(".sticky-header").removeClass("active");
  }
});

  

// Javascript to enable link to tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href="#'+url.split('#')[1]+'"]').tab('show') ;
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
})
 
   
 
 

  $(function() {
    $('#btn-sort').click( function() {
      if( $(this).html() == '날짜 빠른순<span class="arrow-up"></span>' ) {
        $(this).html('날짜 느린순<span class="arrow-down"></span>');
      }
      else {
        $(this).html('날짜 빠른순<span class="arrow-up"></span>');
      }
    });
  });

  $(function () {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left'
    }, function (start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});  


$(function () {
    $('input[name="daterange"]').daterangepicker(
        {
            locale: {
                format: "YYYY-MM-DD",
                separator: " ~ ",
                applyLabel: "확인",
                cancelLabel: "취소",
                fromLabel: "From",
                toLabel: "To",
                customRangeLabel: "Custom",
                weekLabel: "W",
                daysOfWeek: ["일", "월", "화", "수", "목", "금", "토"],
                monthNames: [
                    "1월",
                    "2월",
                    "3월",
                    "4월",
                    "5월",
                    "6월",
                    "7월",
                    "8월",
                    "9월",
                    "10월",
                    "11월",
                    "12월",
                ],
            },
            startDate: $('input[name="startDate"]').val(),
            endDate: $('input[name="endDate"]').val(),
            drops: "auto",
        },
        function (start, end, label) {
            $('input[name="startDate"]').val(start.format("YYYY-MM-DD"));
            $('input[name="endDate"]').val(end.format("YYYY-MM-DD"));
            console.log(
                "A new date selection was made: " +
                start.format("YYYY-MM-DD") +
                " to " +
                end.format("YYYY-MM-DD")
            );
        }
    );
});



  

