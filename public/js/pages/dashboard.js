//[Dashboard Javascript]

//Project:	Law Firm - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)

// Include Perfect Scrollbar and FullCalendar
$.getScript('../assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.js');
$.getScript('../assets/vendor_components/fullcalendar/lib/moment.min.js');
$.getScript('../assets/vendor_components/fullcalendar/fullcalendar.min.js');

// Include Law Firm App and Appointments JavaScript
$.getScript('js/template.js');
$.getScript('js/pages/appointments.js');

$(function () {
  'use strict';

  // Initialize Perfect Scrollbar
  var ps = new PerfectScrollbar('.apt-cal');

  // Initialize FullCalendar
  $('#calendar').fullCalendar({
      slotDuration: '00:15:00', 
      minTime: '08:00:00',
      maxTime: '19:00:00',  
      defaultView: 'month',
      handleWindowResize: true,
      header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
      },
      events: [],
      editable: true,
      droppable: true,
      eventLimit: true,
      selectable: true,
      drop: function(date) { onDrop($(this), date); },
      select: function (start, end, allDay) { onSelect(start, end, allDay); },
      eventClick: function(calEvent, jsEvent, view) { onEventClick(calEvent, jsEvent, view); }
  });

  function onDrop(eventObj, date) {
      var originalEventObject = eventObj.data('eventObject');
      var $categoryClass = eventObj.attr('data-class');
      var copiedEventObject = $.extend({}, originalEventObject);
      copiedEventObject.start = date;
      if ($categoryClass)
          copiedEventObject['className'] = [$categoryClass];
      $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
      if ($('#drop-remove').is(':checked')) {
          eventObj.remove();
      }
  }

  function onEventClick(calEvent, jsEvent, view) {
      var form = $("<form></form>");
      form.append("<label>Change event name</label>");
      form.append("<div class='input-group'><input class='form-control' type=text value='" + calEvent.title + "' /><span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button></span></div>");
      $('#my-event').modal({
          backdrop: 'static'
      });
      $('#my-event').find('.delete-event').show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
          $('#calendar').fullCalendar('removeEvents', function (ev) {
              return (ev._id == calEvent._id);
          });
          $('#my-event').modal('hide');
      });
      $('#my-event').find('form').on('submit', function () {
          calEvent.title = form.find("input[type=text]").val();
          $('#calendar').fullCalendar('updateEvent', calEvent);
          $('#my-event').modal('hide');
          return false;
      });
  }

  function onSelect(start, end, allDay) {
      $('#my-event').modal({
          backdrop: 'static'
      });
      var form = $("<form></form>");
      form.append("<div class='row'></div>");
      form.find(".row")
          .append("<div class='col-md-6'><div class='form-group'><label class='form-label'>Event Name</label><input class='form-control' placeholder='Insert Event Name' type='text' name='title'/></div></div>")
          .append("<div class='col-md-6'><div class='form-group'><label class='form-label'>Category</label><select class='form-control' name='category'></select></div></div>")
          .find("select[name='category']")
          .append("<option value='bg-danger'>Danger</option>")
          .append("<option value='bg-success'>Success</option>")
          .append("<option value='bg-purple'>Purple</option>")
          .append("<option value='bg-primary'>Primary</option>")
          .append("<option value='bg-pink'>Pink</option>")
          .append("<option value='bg-info'>Info</option>")
          .append("<option value='bg-warning'>Warning</option></div></div>");
      $('#my-event').find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
          form.submit();
      });
      $('#my-event').find('form').on('submit', function () {
          var title = form.find("input[name='title']").val();
          var categoryClass = form.find("select[name='category'] option:checked").val();
          if (title !== null && title.length != 0) {
              $('#calendar').fullCalendar('renderEvent', {
                  title: title,
                  start: start,
                  end: end,
                  allDay: false,
                  className: categoryClass
              }, true);  
              $('#my-event').modal('hide');
          }
          else{
              alert('You have to give a title to your event');
          }
          return false;
      });
      $('#calendar').fullCalendar('unselect');
  }

}); // End of use strict


$(function () {

  'use strict';
	
		 var options = {
          series: [{
            name: "Ongoing",
            // data: [45, 52, 38, 24, 33, 26, 41, 20, 31, 45, 25, 20]
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          },
          {
            name: "Settled",
            // data: [35, 41, 62, 42, 25, 48, 29, 37, 36, 40, 32, 35]
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          }
        ],
          chart: {
          height: 140,
          type: 'line',
          zoom: {
            enabled: false
          },
		  toolbar: {
			show: false,
		  },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [2, 2],
          curve: 'smooth',
          dashArray: [0, 4]
        },
        legend: {
			position: 'top',
      		horizontalAlign: 'right', 
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          }
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
          ],
			labels: {
          		show: false,
			},
			axisBorder: {
          		show: false,
			}
        },
        yaxis: {
			labels: {
          		show: false,
			}
        },
		colors: ['#3596f7', '#42b53f'],
        tooltip: {
          y: [
            {
              title: {
                formatter: function (val) {
                  return val 
                }
              }
            },
            {
              title: {
                formatter: function (val) {
                  return val 
                }
              }
            },
          ]
        },
        grid: {
          show: false,
			padding: {
			  right: 6,
			  left: -6
			},
        }
        };

        var chart = new ApexCharts(document.querySelector("#totalcases"), options);
        chart.render();

	var options = {
          series: [{
            name: "Settled",
            // data: [25, 15, 22, 18, 28, 25, 35, 40, 25, 22, 28, 30]
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          }
        ],
          chart: {
          height: 140,
          type: 'area',
          zoom: {
            enabled: false
          },
		  toolbar: {
			show: false,
		  },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [2],
          curve: 'smooth',
          dashArray: [0]
        },
        legend: {
			position: 'top',
      		horizontalAlign: 'right', 
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          }
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			labels: {
          		show: false,
			},
			axisBorder: {
          		show: false,
			}
        },
        yaxis: {
			labels: {
          		show: false,
			}
        },
		colors: ['#42b53f'],
        tooltip: {
          y: [
            {
              title: {
                formatter: function (val) {
                  return val 
                }
              }
            },
          ]
        },
        grid: {
          show: false,
			padding: {
			  right: 6,
			  left: -10,
			  bottom: -20,
			},
        }
        };

        var chart = new ApexCharts(document.querySelector("#settledcases"), options);
        chart.render();
  
  var options = {
          series: [{
            name: "Letters",
            // data: [25, 15, 22, 18, 28, 25, 35, 40, 25, 22, 28, 30]
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          }
        ],
          chart: {
          height: 130,
          type: 'area',
          zoom: {
            enabled: false
          },
		  toolbar: {
			show: false,
		  },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [2],
          curve: 'smooth',
          dashArray: [0]
        },
        legend: {
			position: 'top',
      		horizontalAlign: 'right', 
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          }
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			labels: {
          		show: false,
			},
			axisBorder: {
          		show: false,
			}
        },
        yaxis: {
			labels: {
          		show: false,
			}
        },
		colors: ['#42b53f'],
        tooltip: {
          y: [
            {
              title: {
                formatter: function (val) {
                  return val 
                }
              }
            },
          ]
        },
        grid: {
          show: false,
			padding: {
			  right: 6,
			  left: -10,
			  bottom: -20,
			},
        }
        };

        var chart = new ApexCharts(document.querySelector("#totalletters"), options);
        chart.render();
    
  var options = {
          series: [{
            name: "Advocates",
            // data: [25, 15, 22, 18, 28, 25, 35, 40, 25, 22, 28, 30]
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          }
        ],
          chart: {
          height: 140,
          type: 'area',
          zoom: {
            enabled: false
          },
		  toolbar: {
			show: false,
		  },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [2],
          curve: 'smooth',
          dashArray: [0]
        },
        legend: {
			position: 'top',
      		horizontalAlign: 'right', 
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          }
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			labels: {
          		show: false,
			},
			axisBorder: {
          		show: false,
			}
        },
        yaxis: {
			labels: {
          		show: false,
			}
        },
		colors: ['#42b53f'],
        tooltip: {
          y: [
            {
              title: {
                formatter: function (val) {
                  return val 
                }
              }
            },
          ]
        },
        grid: {
          show: false,
			padding: {
			  right: 6,
			  left: -10,
			  bottom: -20,
			},
        }
        };

        var chart = new ApexCharts(document.querySelector("#totaladvocates"), options);
        chart.render();

  var options = {
          series: [{
            name: "Courts",
            // data: [25, 15, 22, 18, 28, 25, 35, 40, 25, 22, 28, 30]
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          }
        ],
          chart: {
          height: 140,
          type: 'area',
          zoom: {
            enabled: false
          },
		  toolbar: {
			show: false,
		  },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [2],
          curve: 'smooth',
          dashArray: [0]
        },
        legend: {
			position: 'top',
      		horizontalAlign: 'right', 
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          }
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			labels: {
          		show: false,
			},
			axisBorder: {
          		show: false,
			}
        },
        yaxis: {
			labels: {
          		show: false,
			}
        },
		colors: ['#42b53f'],
        tooltip: {
          y: [
            {
              title: {
                formatter: function (val) {
                  return val 
                }
              }
            },
          ]
        },
        grid: {
          show: false,
			padding: {
			  right: 6,
			  left: -10,
			  bottom: -20,
			},
        }
        };

        var chart = new ApexCharts(document.querySelector("#totalcourts"), options);
        chart.render();
	
  var options = {
          series: [{
            name: "Judges",
            // data: [25, 15, 22, 18, 28, 25, 35, 40, 25, 22, 28, 30]
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          }
        ],
          chart: {
          height: 130,
          type: 'area',
          zoom: {
            enabled: false
          },
		  toolbar: {
			show: false,
		  },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [2],
          curve: 'smooth',
          dashArray: [0]
        },
        legend: {
			position: 'top',
      		horizontalAlign: 'right', 
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          }
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			labels: {
          		show: false,
			},
			axisBorder: {
          		show: false,
			}
        },
        yaxis: {
			labels: {
          		show: false,
			}
        },
		colors: ['#42b53f'],
        tooltip: {
          y: [
            {
              title: {
                formatter: function (val) {
                  return val 
                }
              }
            },
          ]
        },
        grid: {
          show: false,
			padding: {
			  right: 6,
			  left: -10,
			  bottom: -20,
			},
        }
        };

        var chart = new ApexCharts(document.querySelector("#totaljudges"), options);
        chart.render();
	
  
	var options = {
          series: [{
          name: 'Won',
          data: [0, 0, 0, 0, 0, 0, 0]
          // data: [44, 55, 41, 37, 22, 43, 21]
        }, {
          name: 'Lost',
          data: [0, 0, 0, 0, 0, 0, 0]
          // data: [13, 12, 13, 12, 13, 13, 12]
        }, {
          name: 'Declined',
          data: [0, 0, 0, 0, 0, 0, 0]
          // data: [12, 17, 11, 9, 15, 11, 20]
        }],
          chart: {
          type: 'bar',
          height: 300,
          stacked: true,
          zoom: {
            enabled: false
          },
		  toolbar: {
			show: false,
		  },
        },
		colors: ['#42b53f','#ee3158','#ffa800'],
        plotOptions: {
          bar: {
            horizontal: true,
          },
        },
        stroke: {
          width: 1,
          colors: ['#fff']
        },
		dataLabels: {
  			enabled: false,
		},
        xaxis: {
          categories: ["Real Estate", "M&A", "Corporate", "Employment", "Envronmental", "Litigation", "IP"],
          labels: {
            formatter: function (val) {
              return val
            },
          },
        },
        yaxis: {
          title: {
            text: undefined
          },
			labels: {
			  style: {
				  colors: [],
				  fontSize: '16px',
				  fontFamily: 'IBM Plex Sans , sans-serif',
				  fontWeight: 400,
				  cssClass: 'apexcharts-yaxis-label',
			  },
		  },
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val
            }
          }
        },
        fill: {
          opacity: 1
        },
        legend: {
          position: 'right',
          horizontalAlign: 'right',
        },
		responsive: [{
			breakpoint: 1025,
			options: {				
				legend: {
				  position: 'bottom',
				  horizontalAlign: 'center',
				},
			},
		}],
        };

        var chart = new ApexCharts(document.querySelector("#opportunityoutcome"), options);
        chart.render();
	
	
	
		var options = {
          series: [{
          name: 'Won',
          // data: [4, 8, 12, 10, 11, 10, 8]
          data: [0, 0, 0, 0, 0, 0, 0]
        }, {
          name: 'Lost',
          data: [0, 0, 0, 0, 0, 0, 0]
          // data: [8, 2, 9, 8, 10, 5, 2]
        }],
          chart: {
          type: 'bar',
          height: 300,
          zoom: {
            enabled: false
          },
		  toolbar: {
			show: false,
		  },
        },
		colors: ['#1e42a0','#ee3158'],
        plotOptions: {
			bar: {
				horizontal: false,
				columnWidth: '55%',
				endingShape: 'rounded'
			  },
        },
        stroke: {
          width: 1,
          colors: ['#fff']
        },
		dataLabels: {
  			enabled: false,
		},
        xaxis: {
          categories: ["Campaign", "Event", "Referral", "Seminar", "Sponsorship", "Tickets"],
          labels: {
            formatter: function (val) {
              return val
            },
          },
        },
        yaxis: {
          title: {
            text: undefined
          },
			
			labels: {
			  style: {
				  colors: [],
				  fontSize: '16px',
				  fontFamily: 'IBM Plex Sans , sans-serif',
				  fontWeight: 400,
				  cssClass: 'apexcharts-yaxis-label',
			  },
		  },
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val
            }
          }
        },
        fill: {
          opacity: 1
        },
        legend: {
          show: false,
        }
        };

        var chart = new ApexCharts(document.querySelector("#opportunityoutcome2"), options);
        chart.render();
	
	
		var options = {
        series: [{
            name: "Profit",
            // data: [0, 40, 110, 70, 100, 60, 130, 55, 140, 125]
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        }],
        chart: {
			foreColor:"#bac0c7",
          height: 300,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
		colors:['#1e42a0'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          	show: true,
			curve: 'smooth',
			lineCap: 'butt',
			colors: undefined,
			width: 5,
			dashArray: 0, 
        },		
		markers: {
			size: 5,
			colors: '#ffffff',
			strokeColors: '#1e42a0',
			strokeWidth: 3,
			strokeOpacity: 0.9,
			strokeDashArray: 0,
			fillOpacity: 1,
			discrete: [],
			shape: "circle",
			radius: 5,
			offsetX: 0,
			offsetY: 0,
			onClick: undefined,
			onDblClick: undefined,
			hover: {
			  size: undefined,
			  sizeOffset: 3
			}
		},	
        grid: {
			borderColor: '#f7f7f7', 
          row: {
            colors: ['transparent'], // takes an array which will be repeated on columns
            opacity: 0
          },			
		  yaxis: {
			lines: {
			  show: true,
			},
		  },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		  labels: {
			show: true,        
          },
          axisBorder: {
            show: true
          },
          axisTicks: {
            show: true
          },
          tooltip: {
            enabled: true,        
          },
        },
        yaxis: {
          labels: {
            show: true,
            formatter: function (val) {
              return val + "K";
            }
          }
        
        },
      };
      var chart = new ApexCharts(document.querySelector("#charts_widget_43_chart"), options);
      chart.render();
	
	
	
		var options = {
        series: [{
          name: 'series1',
          data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          // data: [178, 223, 195, 201, 143, 189, 156, 155, 118, 167, 159]
        }],
        chart: {
          height: 87,
		  width: 600,
          type: 'area',
			toolbar: {
        		show: false,
			},
			offsetY: 15,
			offsetX: -50,
        },
		colors:['#ee3158'],
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth',
        },
			
		markers: {
			size: 0,
		},
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
          }
        
        },
        xaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val ;
            }
          }
        
        },
		grid: {
			show: true,
			borderColor: '#39DA8A',
			strokeDashArray: 0,
			position: 'back',
			xaxis: {
				lines: {
					show: false,
				}
			},   
			yaxis: {
				lines: {
					show: false
				}
			},  
			row: {
				colors: undefined,
				opacity: 0.5,
			},  
			column: {
				colors: undefined,
				opacity: 0.1
			},  
		}
      };

      var chart = new ApexCharts(document.querySelector("#statisticschart5"), options);
      chart.render();
	
	
}); // End of use strict
