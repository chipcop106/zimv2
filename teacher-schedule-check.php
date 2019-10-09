<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<link href="lib/fullcalendar/fullcalendar.min.css" rel="stylesheet">
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <!-- Breadcrumb -->
        <div class="row mg-b-30">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-0">
                        <li class="breadcrumb-item"><a href="#">Course </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Empty room check </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="mg-b-30" id="filterCollapse">
                    <div class="card">
                        <div class="card-body">
                            <div class=" d-flex flex-wrap">
                                <div class="form-group col-md-4 col-6 col-xl-3">
                                    <label class="form-control-label">Branch:</label>
                                    <select class="custom-select">
                                        <option value="all" selected>All</option>
                                        <option value="1">Yên Lãng</option>
                                        <option value="2">Huỳnh Lan Khánh</option>
                                        <option value="3">Trần Phú</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-6 col-xl-6">
                                    <label class="form-control-label">Room: </label>
                                    <select class="custom-select select2" multiple>
                                        <option value="all">All</option>
                                        <option value="1">401</option>
                                        <option value="2">305</option>
                                        <option value="3">306</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 col-6 col-xl-3">
                                    <label class="form-control-label">Class: </label>
                                    <select class="custom-select select2">
                                        <optgroup label="Morning">
                                            <option>07:00 - 08:30</option>
                                            <option>07:00 - 08:30</option>
                                        </optgroup>
                                        <optgroup label="Afternoone">
                                            <option>10:00 - 08:30</option>
                                            <option>07:00 - 08:30</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-6">
                                    <label class="form-control-label">From date: </label>
                                    <input type="text" class="form-control datetimepicker date-only" placeholder="From">
                                </div>
                                <div class="form-group col-md-6 col-6">
                                    <label class="form-control-label">To date: </label>
                                    <input type="text" class="form-control datetimepicker date-only" placeholder="To">
                                </div>
                                <div class="form-group col-12 mg-b-0">
                                    <button type="button" class="btn btn-primary">Check</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 colsm-12 col-md-12">
                <div class="schedule-teacher">
                    <div class="lichday-col-wrap" id="lichday_colwrapper">
                        <table id="customers" class="table table-bordered">
                            <tr class="hd">
                                <th style="text-align: center;">CA</th>
                                <th>Monday <br/>14/10</th>
                                <th>Tuesday <br/>15/10</th>
                                <th>Wednesday <br/>16/10</th>
                                <th>Thursday <br/>17/10</th>
                                <th>Friday <br/>18/10</th>
                                <th>Saturday <br/>19/10</th>
                                <th>Sunday <br/>20/10</th>
                            </tr>
                            <tr>
                                <th><p class="from-time">08:00</p><span class="to-time">10:00</span></th>
                                <td style="background: #fbfff1;">[ZIM - 308 Trần Phú] - A-IELTS Intensive, 16/07, 09:30
                                    - 11:30, TP-2D<br><span class="cl-sub">Writing task 2</span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td style="background: #fbfff1;">[ZIM – 35 Võ Oanh] - A-IELTS 1-1, 21/08, 09:00-11:00,
                                    14:00-16:00, 18:30-20:30, <br><span class="cl-sub">Writing task 2</span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                            </tr>
                            <tr>
                                <th><p class="from-time">09:00</p><span class="to-time">11:00</span></th>
                                <td style="background: #fbfff1;">[ZIM - 308 Trần Phú] - A-IELTS Intensive, 16/07, 09:30
                                    - 11:30, TP-2D<br><span class="cl-sub">Writing task 2</span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td style="background: #fbfff1;">[ZIM – 35 Võ Oanh] - A-IELTS 1-1, 21/08, 09:00-11:00,
                                    14:00-16:00, 18:30-20:30, <br><span class="cl-sub">Writing task 2</span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                            </tr>
                            <tr>
                                <th><p class="from-time">13:00</p><span class="to-time">15:00</span></th>
                                <td style="background: #fbfff1;">[ZIM - 308 Trần Phú] - A-IELTS Advanced, 09/09,
                                    09:30-11:30, 14:00-16:00, 18:30-20:30, <br><span class="cl-sub">Writing task
                                        2</span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                            </tr>
                            <tr>
                                <th><p class="from-time">17:00</p><span class="to-time">19:00</span></th>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                            </tr>
                            <tr class="hd">
                                <th style="text-align: center;">CA</th>
                                <th>Monday <br/>21/10</th>
                                <th>Tuesday <br/>22/10</th>
                                <th>Wednesday <br/>23/10</th>
                                <th>Thursday <br/>24/10</th>
                                <th>Friday <br/>25/10</th>
                                <th>Saturday <br/>26/10</th>
                                <th>Sunday <br/>27/10</th>
                            </tr>
                            <tr>
                                <th><p class="from-time">08:00</p><span class="to-time">10:00</span></th>
                                <td></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td style="background: #fbfff1;">[ZIM – 35 Võ Oanh] - A-IELTS 1-1, 21/08, 09:00-11:00,
                                    14:00-16:00, 18:30-20:30, <br><span class="cl-sub">Writing task 2</span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                            </tr>
                            <tr>
                                <th><p class="from-time">11:00</p><span class="to-time">13:00</span></th>
                                <td></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td style="background: #fbfff1;">[ZIM – 35 Võ Oanh] - A-IELTS 1-1, 21/08, 09:00-11:00,
                                    14:00-16:00, 18:30-20:30, <br><span class="cl-sub">Writing task 2</span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                            </tr>
                            <tr>
                                <th><p class="from-time">15:00</p><span class="to-time">17:00</span></th>
                                <td style="background: #fbfff1;">[ZIM - 308 Trần Phú] - A-IELTS Advanced, 09/09,
                                    09:30-11:30, 14:00-16:00, 18:30-20:30, <br><span class="cl-sub">Speaking</span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                            </tr>
                            <tr>
                                <th><p class="from-time">18:00</p><span class="to-time">20:00</span></th>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                                <td></td>
                                <td class="off-day"><span class="img-off"><img src="assets/img/day-off.png" alt="icon"></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
<?php require_once( 'footer.php' ); ?>
<script src="lib/moment/min/moment.min.js"></script>
<script src="lib/fullcalendar/fullcalendar.min.js"></script>

<script>
$(document).ready(function() {
    // Initialize fullCalendar
    // Calendar Event Source
    var curYear = moment().format('YYYY');
    var curMonth = moment().format('MM');
    var calendarEvents = {
        id: 1,
        backgroundColor: '#f7f7f7',
        borderColor: 'transparent',
        events: [{
            id: '1',
            start: curYear + '-' + curMonth + '-08T08:30:00',
            end: curYear + '-' + curMonth + '-08T13:00:00',
            info: {
                room: '502',
                teacher: 'Trương Văn A',
                course: 'A-IELST Master',
                branch: '65 - Võ Oanh',
                subject: 'Listening',
                borderColor: '#63bf0e'
            },

        }, {
            id: '2',
            start: curYear + '-' + curMonth + '-22T09:00:00',
            end: curYear + '-' + curMonth + '-22T17:00:00',
            info: {
                room: '502',
                teacher: 'Trương Văn Hoàng',
                course: 'A-IELST Master',
                branch: '65 - Võ Oanh',
                subject: 'Listening',
                borderColor: '#63bf0e'
            },

        }, {
            id: '3',
            start: curYear + '-' + curMonth + '-23T12:00:00',
            end: curYear + '-' + curMonth + '-23T18:00:00',
            info: {
                room: '502',
                teacher: 'Trương Văn Liên',
                course: 'A-IELST Master',
                branch: '65 - Võ Oanh',
                subject: 'Listening',
                borderColor: '#63bf0e'
            },

        }, {
            id: '4',
            start: curYear + '-' + curMonth + '-25T07:30:00',
            end: curYear + '-' + curMonth + '-25T15:30:00',
            info: {
                room: '502',
                teacher: 'Trương Văn A',
                course: 'A-IELST Master',
                branch: '65 - Võ Oanh',
                subject: 'Listening',
                borderColor: '#f7f7f7'
            },
        }, {
            id: '5',
            start: curYear + '-' + curMonth + '-29T10:00:00',
            end: curYear + '-' + curMonth + '-29T15:30:00',
            info: {
                room: '502',
                teacher: 'Trương Văn A',
                course: 'A-IELST Master',
                branch: '65 - Võ Oanh',
                subject: 'Listening',
                borderColor: 'red'
            },

        }, {
            id: '6',
            start: curYear + '-' + curMonth + '-28T13:00:00',
            end: curYear + '-' + curMonth + '-28T18:30:00',
            info: {
                room: '502',
                teacher: 'Trương Văn A',
                course: 'A-IELST Master',
                branch: '65 - Võ Oanh',
                subject: 'Listening',
                borderColor: '#f7f7f7'
            },

        }]
    };
    $('#schedule-calendar').fullCalendar({
        height: 'parent',
        eventLimit: false,
        timeFormat: 'HH:mm',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        navLinks: true,
        slotEventOverlap: false,
        selectable: false,
        displayEventEnd: true,
        selectLongPressDelay: 100,
        editable: false,
        nowIndicator: true,
        defaultView: 'listMonth',
        views: {
            agenda: {
                columnHeaderHtml: function(mom) {
                    return '<span>' + mom.format('ddd') + '</span>' + ' ' +
                        '<span>' + mom.format('DD') + '</span>';
                }
            },
            day: {
                columnHeader: false
            },
            listMonth: {
                listDayFormat: 'ddd DD',
                listDayAltFormat: false
            },
            listWeek: {
                listDayFormat: 'ddd DD',
                listDayAltFormat: false
            },
            agendaThreeDay: {
                type: 'agenda',
                duration: {
                    days: 3
                },
                titleFormat: 'MMMM YYYY'
            }
        },

        events: calendarEvents,
        eventAfterAllRender: function(view) {
            if (view.name === 'listMonth' || view.name === 'listWeek') {
                var dates = view.el.find('.fc-list-heading-main');
                dates.each(function() {
                    var text = $(this).text().split(' ');
                    var now = moment().format('DD');

                    $(this).html(text[0] + '<span>' + text[1] + '</span>');
                    if (now === text[1]) {
                        $(this).addClass('now');
                    }
                });
            }
        },
        eventRender: function(event, element) {
            // if(event.description) {
            //     element.find('.fc-list-item-title').append('<span class="fc-desc">' + event.description + '</span>');
            //     element.find('.fc-content').append('<span class="fc-desc">' + event.description + '</span>');
            // }
            if (event.info) {
                if (element.find('.fc-list-item-title').length > 0) {
                    element.find('.fc-list-item-title').append(
                        `<div class="box-info">
                    <p class="txt">Room: ${event.info.room}</p>
                    <p class="txt">${event.info.teacher}</p>
                    <p class="txt">${event.info.course}</p>
                    <p class="txt">${event.info.branch}</p>
                    <p class="txt"><span class="subject">${event.info.subject}</span></p>
                </div> `);
                } else {
                    element.append(
                        `<div class="box-info">
                        <p class="txt">Room: ${event.info.room}</p>
                        <p class="txt">${event.info.teacher}</p>
                        <p class="txt">${event.info.course}</p>
                        <p class="txt">${event.info.branch}</p>
                        <p class="txt"><span class="subject">${event.info.subject}</span></p>
                    </div>
                    `
                    );
                }

            }

            var eBorderColor = (event.source.borderColor) ? event.info.borderColor :
                'rgb(247, 247, 247)';
            element.find('.fc-event-dot').css('backgroundColor', eBorderColor)
            element.css('borderLeft', `2px solid ${eBorderColor}`);
        },
    });
    var calendar = $('#schedule-calendar').fullCalendar('getCalendar');
    // change view to week when in tablet
    if (window.matchMedia('(min-width: 576px)').matches) {
        calendar.changeView('agendaWeek');
    }

    // change view to month when in desktop
    if (window.matchMedia('(min-width: 992px)').matches) {
        calendar.changeView('month');
    }

    // change view based in viewport width when resize is detected
    calendar.option('windowResize', function(view) {
        if (view.name === 'listWeek') {
            if (window.matchMedia('(min-width: 992px)').matches) {
                calendar.changeView('month');
            } else {
                calendar.changeView('listWeek');
            }
        }
    });

    $('.select2').select2();
});
</script>