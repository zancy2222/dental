document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'timeGrid', 'dayGrid', 'resourceTimeGrid', 'googleCalendar' ],
      googleCalendarApiKey: "AIzaSyBkStXv5r0JDL5voi9LRBqnahmsHM1OSho",
      eventOverlap: false,
      eventConstraint: 'horizontal',
      defaultTimedEventDuration: '00:25:00',
      minTime: '08:00:00',
      maxTime: '24:00:00',        
      timeZone: 'local',
      resourceOrder: 'title',
      slotDuration: '00:30:00',
      slotLabelInterval: '00:30:00',
      timeFormat: 'H:mm',
      initialView: 'timeGridWeek',
      headerToolbar: {
        left: 'prev,next',
        center: 'title',
        right: 'timeGridWeek,timeGridDay'
      },
      resources: [
          { id: 'doctor1', title: 'Dr. Jean' },
          { id: 'doctor2', title: 'Dr. Juan' }
      ],
      events: [
          {
              googleCalendarId: 'c_db91cdef2b49d8b923d08ab0aabe5c870aeee1a5dee721ea20cbac5d8f606657@group.calendar.google.com',
              color: 'blue',
          },
          {
              googleCalendarId: 'jvictoria@rhet-corp.com',
              color: 'green'
          }
      ],
      eventDidMount: function(info) {

          if (info.event.source.googleCalendarId === 'c_db91cdef2b49d8b923d08ab0aabe5c870aeee1a5dee721ea20cbac5d8f606657@group.calendar.google.com') {
              info.event.setExtendedProp('resourceId', 'doctor1');
          } else if (info.event.source.googleCalendarId === 'jvictoria@rhet-corp.com') {
              info.event.setExtendedProp('resourceId', 'doctor2');
          }
      },
      eventContent: function(arg) {

          if (arg.view.type === 'dayGridDay') {
              var resourceId = arg.event.extendedProps.resourceId;
              var resourceObj = calendar.getResourceById(resourceId);
              if (resourceObj) {
                  return { html: '<div class="fc-content">' + arg.timeText + '</div>' };
              }
          }
      }
    });

    calendar.render(); 

    var pikaday = new Pikaday({
      field: document.getElementById('datepicker'),
      format: 'YYYY/MM/DD', 
      onSelect: function(selectedDate) {
          calendar.gotoDate(selectedDate);
      }
    });
  });