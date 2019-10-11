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
                        <li class="breadcrumb-item active" aria-current="page">Self Course </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End breadcrumb -->
        <div class="d-xl-flex align-items-center justify-content-between ">
            <div>
                <h4 class="mg-b-0 tx-spacing--1">Lists self course </h4>
            </div>
            <div class="d-xl-block">
                <div class="d-flex justify-content-xl-center mg-t-20 mg-xl-t-0 flex-wrap">
                    <!-- <a href="course-empty-room-check.php"
                        class="btn btn-primary mg-xl-l-5 mg-r-5 transparent"><i></i>Xem lịch phòng</a>
                    <a href="teacher-schedule-check.php" class="btn btn-primary mg-l-5 mg-r-5 transparent"><i></i>Xem
                        lịch giáo viên</a> -->
                    <div class="search-form mg-l-5 mg-r-5">
                        <input type="search" class="form-control" placeholder="Search">
                        <button class="btn" type="button"><i data-feather="search"></i></button>
                    </div>
                    <div class="sort-by mg-l-5 mg-r-5">
                        <select class="custom-select">
                            <option value="" disabled selected>Sắp xếp theo</option>
                            <option value="2">Số tiền</option>
                            <option value="all">Tên khoá từ A-Z</option>
                            <option value="all">Tên khoá từ Z-A</option>
                            <option value="1">Trạng thái</option>
                            <option value="2">Ngày bắt đầu</option>
                            <option value="2">Ngày kết thúc</option>
                        </select>
                    </div>
                    <a href="#filterCollapse" class="btn btn-primary mg-l-5 mg-r-5 mg-sm-r-0 transparent" role="button"
                        data-toggle="collapse" aria-expanded="false" aria-controls="filterCollapse"><i
                            data-feather="filter"></i></a>
                </div>
            </div>

        </div>

        <div class="collapse mg-t-10" id="filterCollapse">
            <div class="card">
                <div class="card-body">
                    <div class=" d-flex flex-wrap">
                        <div class="form-group col-md-4 col-12 col-xl-4">
                            <label class="form-control-label">Chi nhánh:</label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Yên Lãng</option>
                                <option value="2">Huỳnh Lan Khánh</option>
                                <option value="3">Trần Phú</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-12 col-xl-4">
                            <label class="form-control-label">Lớp học: </label>
                            <select class="custom-select">
                                <option value="all" selected>Tất cả</option>
                                <option value="1">Yên Lãng</option>
                                <option value="2">Huỳnh Lan Khánh</option>
                                <option value="3">Trần Phú</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-12 col-xl-4">
                            <label class="form-control-label">Ngày mở: </label>
                            <input type="text" class="form-control datetimepicker date-only" placeholder="Ngày mở">
                        </div>
                        <div class="form-group col-12 mg-b-0">
                            <button type="button" class="btn btn-primary">Lọc kết quả</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mg-t-30">
            <div class="col-12 colsm-12 col-md-12">
                <div class="table-responsive">
                    <table class="table table-vcenter table-hover">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Open date</th>
                                <th>Branch</th>
                                <th>Class</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Self - Study Week 2/7.2019</td>
                                <td>20/04/2019</td>
                                <td>ZIM - 308 Trần Phú</td>
                                <td>TP-3B (Self-study room)</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-icon btn-sm">
                                        <i data-feather="eye"></i> View
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation" class="mg-t-10">
                    <ul class="pagination mg-b-0 justify-content-end">
                        <li class="page-item disabled"><a class="page-link page-link-icon" href="#"><i
                                    data-feather="chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link page-link-icon" href="#"><i
                                    data-feather="chevron-right"></i></a></li>
                    </ul>
                </nav>
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