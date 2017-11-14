/* ------------------------------------------------------------------------------
*
*  # Tabbed user profile
*
*  Specific JS code additions for tabbed user profile page
*
*  Version: 1.0
*  Latest update: Jan 1, 2017
*
* ---------------------------------------------------------------------------- */

$(function() {


    // Charts
    // ------------------------------

    // Set paths



    // Configuration







    // Form components
    // ------------------------------

    // Select2 selects
    $('.select').select2({
        minimumResultsForSearch: Infinity
    });


    // Styled file input
    $(".file-styled").uniform({
        fileButtonClass: 'action btn bg-warning'
    });


    // Styled checkboxes, radios
    $(".styled").uniform({
        radioClass: 'choice'
    });



    // Schedule
    // ------------------------------

    // Add events
    var eventsColors = [
        {
            title: 'All Day Event',
            start: '2014-11-01',
            color: '#EF5350'
        },
        {
            title: 'Long Event',
            start: '2014-11-07',
            end: '2014-11-10',
            color: '#26A69A'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2014-11-09T16:00:00',
            color: '#26A69A'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2014-11-16T16:00:00',
            color: '#5C6BC0'
        },
        {
            title: 'Conference',
            start: '2014-11-11',
            end: '2014-11-13',
            color: '#546E7A'
        },
        {
            title: 'Meeting',
            start: '2014-11-12T10:30:00',
            end: '2014-11-12T12:30:00',
            color: '#546E7A'
        },
        {
            title: 'Lunch',
            start: '2014-11-12T12:00:00',
            color: '#546E7A'
        },
        {
            title: 'Meeting',
            start: '2014-11-12T14:30:00',
            color: '#546E7A'
        },
        {
            title: 'Happy Hour',
            start: '2014-11-12T17:30:00',
            color: '#546E7A'
        },
        {
            title: 'Dinner',
            start: '2014-11-12T20:00:00',
            color: '#546E7A'
        },
        {
            title: 'Birthday Party',
            start: '2014-11-13T07:00:00',
            color: '#546E7A'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2014-11-28',
            color: '#FF7043'
        }
    ];


    // Initialize calendar with options
    $('.schedule').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2014-11-12',
        editable: true,
        events: eventsColors
    });


    // Render in hidden elements
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('.schedule').fullCalendar('render');
    });



    // Link row
    // ------------------------------

    // Initialize Row link plugin
    $('tbody.rowlink').rowlink();



    // Custom code
    // ------------------------------

    // Highlight row when checkbox is checked
    $('.table-inbox').find('tr > td:first-child').find('input[type=checkbox]').on('change', function() {
        if($(this).is(':checked')) {
            $(this).parents('tr').addClass('warning');
        }
        else {
            $(this).parents('tr').removeClass('warning');
        }
    });

    // Grab first letter and insert to the icon
    $(".table tr").each(function (i) {

        // Title
        var $title = $(this).find('.letter-icon-title'),
            letter = $title.eq(0).text().charAt(0).toUpperCase();

        // Icon
        var $icon = $(this).find('.letter-icon');
            $icon.eq(0).text(letter);
    });

});
