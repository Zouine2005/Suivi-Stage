@include('layouts.main')
<body> 
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-11 offset-1 mt-3 mb-3">
          <div id="calendar" class="col-12"></div>
        </div>
      </div>
    </div> 
  </div>

  <script>
    $(document).ready(function(){
      var events = @json($events); 

      events.forEach(function(event, index) {
        var colors = ['SteelBlue', 'LightSeaGreen', 'SlateGray']; 
        event.color = colors[index % colors.length]; 
      });

      $('#calendar').fullCalendar({
        header:{
          left:'prev,next today',
          center:'title',
          right:'month,agendaWeek,agendaDay' 
        },
        events: events,
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDays){
          var startDate = moment(start).format('YYYY-MM-DD');
          window.location.href = '{{ route("events.create_form") }}?start_date=' + startDate;
        },
        eventClick: function (calEvent, jsEvent, view) {
          window.location.href = '{{ route("events.edit", ":event_id") }}'.replace(':event_id', calEvent.id);
        }
      });
    });
  </script>
</body>
</html>
