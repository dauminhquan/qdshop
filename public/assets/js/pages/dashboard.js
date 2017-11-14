/* ------------------------------------------------------------------------------
 *
 *  # Dashboard configuration
 *
 *  Demo dashboard configuration. Contains charts and plugin inits
 *
 *  Version: 1.0
 *  Latest update: Aug 1, 2015
 *
 * ---------------------------------------------------------------------------- */

$(function() {    


    // Switchery toggles
    // ------------------------------

    var switches = Array.prototype.slice.call(document.querySelectorAll('.switch'));
    switches.forEach(function(html) {
        var switchery = new Switchery(html, {color: '#4CAF50'});
    });




    // Daterange picker
    // ------------------------------

    $('.daterange-ranges').daterangepicker(
        {
            startDate: moment().subtract('days', 29),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2016',
            dateLimit: { days: 60 },
            ranges: {
                'Hôm nay': [moment(), moment()],
                'Hôm qua': [moment().subtract('days', 1), moment()],
                '7 ngày trước': [moment().subtract('days', 6), moment()],
                '30 ngày trước': [moment().subtract('days', 29), moment()],
                'Trong tháng này': [moment().startOf('month'), moment().endOf('month')],
                'Tháng trước': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            opens: 'left',
            applyClass: 'btn-small bg-slate-600 btn-block',
            cancelClass: 'btn-small btn-default btn-block',
            format: 'MM/DD/YYYY'
        },
        function(start, end) {
            showdate(start,end)
            $('#app_sales').html('')
            appSalesLines('#app_sales', 300);
        }
    );

    $('.daterange-ranges span').html(moment().subtract('days', 29).format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));



    // App sales lines chart
    // ------------------------------

    appSalesLines('#app_sales', 300); // initialize chart
//Thông kê
    // Chart setup
    function appSalesLines(element, height) {
        // Basic setup
        // ------------------------------

        // Define main variables
        var d3Container = d3.select(element),
            margin = {top: 5, right: 30, bottom: 30, left: 50},
            width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right,
            height = height - margin.top - margin.bottom;

        // Tooltip
        var tooltip = d3.tip()//data thống kê
            .attr('class', 'd3-tip')
            .html(function (d) {
                return "<ul class='list-unstyled mb-5'>" +
                    "<li>" + "<div class='text-size-base mt-5 mb-5'><i class='icon-circle-left2 position-left'></i>" +" Thống kê" + "</div>" + "</li>" +
                    "<li>" + "Đơn hàng: &nbsp;" + "<span class='text-semibold pull-right'>" + d.value + "</span>" + "</li>" +
                    "<li>" + "Doanh thu: &nbsp; " + "<span class='text-semibold pull-right'>" +d.invoice.toFixed(2) + "<sup>đ</sup>" + "</span>" + "</li>" +
                    "<li>" + "Ngày: &nbsp; " + "<span class='text-semibold pull-right'>"  + d.dateold + "</span>" + "</li>" +
                "</ul>";
            });

        // Format date
        var parseDate = d3.time.format("%Y/%m/%d").parse,
            formatDate = d3.time.format("%b %d, '%y");



        // Line colors
        var scale = ["#4CAF50", "#FF5722", "#5C6BC0"],
            color = d3.scale.ordinal().range(scale);



        // Create chart
        // ------------------------------

        // Container
        var container = d3Container.append('svg');

        // SVG element
        var svg = container
            .attr('width', width + margin.left + margin.right)
            .attr('height', height + margin.top + margin.bottom)
            .append("g")
                .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
                .call(tooltip);



        // Add date range switcher
        // ------------------------------

        // Menu
        // chọn ngày để show dữ liệu
        var menu = $("#select_date").multiselect({
            buttonClass: 'btn btn-link text-semibold',
            enableHTML: true,
            dropRight: true,
            onChange: function() { change(), $.uniform.update(); },
            buttonText: function (options, element) {
                var selected = '';
                options.each(function() {
                    selected += $(this).html() + ', ';
                });
                return '<span class="status-mark border-warning position-left"></span>' + selected.substr(0, selected.length -2);
            }
        });

        // Radios
        $(".multiselect-container input").uniform({ radioClass: 'choice' });



        // Load data
        // ------------------------------
//type,date,name1,name2,name3

        // d3.csv("assets/demo_data/dashboard/app_sales.data", function(error, data) {
        //     formatted = data;
        //
        //     //load data
        //
        //     // formatted =[
        //     //     {type: "val1", date: "2015/06/15", Alpha: "20"},
        //     //
        //     //     {type: "val1", date: "2015/06/16", Alpha: "90"},
        //     //
        //     //     {type: "val1", date: "2015/06/17", Alpha: "115"}
        //     // ]
        //     redraw();
        // });
        xdf()
        function xdf()
        {
            formatted =  getdata()

            redraw();
        }

        // Construct layout
        // ------------------------------

        // Add events
        var altKey;
        d3.select(window)
            .on("keydown", function() { altKey = d3.event.altKey; })
            .on("keyup", function() { altKey = false; });

        // Set terms of transition on date change   
        function change() {
          d3.transition()
              .duration(altKey ? 7500 : 500)
              .each(redraw);
        }



        // Main chart drawing function
        // ------------------------------

        function redraw() {

            // Construct chart layout
            // ------------------------------

            // Create data nests
            // lưu ý datatype
            var nested = d3.nest()
                .key(function(d) { return d.type; })
                .map(formatted)
            // Get value from menu selection
            // the option values correspond
            //to the [type] value we used to nest the data
            var series = menu.val();

            // Only retrieve data from the selected series using nest
            var data = nested[series];

            // For object constancy we will need to set "keys", one for each type of data (column name) exclude all others.

            color.domain(d3.keys(data[0]).filter(function(key) { return (key !== "date" && key !== "type" && key!== 'invoice'); }));

            // Setting up color map
            var linedata = color.domain().map(function(name) {

                return {

                            name: name,
                            values: data.map(function(d) {

                                var dateold = new Date(d.date)
                                dateold = dateold.getDay()+ '/' + dateold.getMonth() + '/' +dateold.getFullYear()
                                return {name: name, date: parseDate(d.date), value: parseFloat(d[name], 10), dateold: dateold,invoice : d.invoice};
                            })
                        };
                    });

            // Draw the line
            var line = d3.svg.line()
                .x(function(d) { return x(d.date); })
                .y(function(d) { return y(d.value); })
                .interpolate('cardinal');



            // Construct scales
            // ------------------------------

            // Horizontal
            var x = d3.time.scale()
                .domain([
                    d3.min(linedata, function(c) { return d3.min(c.values, function(v) { return v.date; }); }),
                    d3.max(linedata, function(c) { return d3.max(c.values, function(v) { return v.date; }); })
                ])
                .range([0, width]);

            // Vertical
            var y = d3.scale.linear()
                .domain([
                    d3.min(linedata, function(c) { return d3.min(c.values, function(v) { return v.value; }); }),
                    d3.max(linedata, function(c) { return d3.max(c.values, function(v) { return v.value; }); })
                ])
                .range([height, 0]);



            // Create axes
            // ------------------------------

            // Horizontal
            var xAxis = d3.svg.axis()
                .scale(x)
                .orient("bottom")
                .tickPadding(8)
                .ticks(d3.time.days)
                .innerTickSize(4)
                .tickFormat(d3.time.format("%a")); // Display hours and minutes in 24h format

            // Vertical
            var yAxis = d3.svg.axis()
                .scale(y)
                .orient("left")
                .ticks(6)
                .tickSize(0 -width)
                .tickPadding(8);



            //
            // Append chart elements
            //

            // Append axes
            // ------------------------------

            // Horizontal
            svg.append("g")
                .attr("class", "d3-axis d3-axis-horizontal d3-axis-solid")
                .attr("transform", "translate(0," + height + ")");

            // Vertical
            svg.append("g")
                .attr("class", "d3-axis d3-axis-vertical d3-axis-transparent");



            // Append lines
            // ------------------------------

            // Bind the data
            var lines = svg.selectAll(".lines")
                .data(linedata)

            // Append a group tag for each line
            var lineGroup = lines
                .enter()
                .append("g")
                    .attr("class", "lines")
                    .attr('id', function(d){ return d.name + "-line"; });

            // Append the line to the graph
            lineGroup.append("path")
                .attr("class", "d3-line d3-line-medium")
                .style("stroke", function(d) { return color(d.name); })
                .style('opacity', 0)
                .attr("d", function(d) { return line(d.values[0]); })
                .transition()
                    .duration(500)
                    .delay(function(d, i) { return i * 200; })
                    .style('opacity', 1);



            // Append circles
            // ------------------------------

            var circles = lines.selectAll("circle")
                .data(function(d) { return d.values; })
                .enter()
                .append("circle")
                    .attr("class", "d3-line-circle d3-line-circle-medium")
                    .attr("cx", function(d,i){  x(d.date)})
                    .attr("cy",function(d,i){return y(d.value)})
                    .attr("r", 3)
                    .style('fill', '#fff')
                    .style("stroke", function(d) { return color(d.name); });

            // Add transition
            circles
                .style('opacity', 0)
                .transition()
                    .duration(500)
                    .delay(500)
                    .style('opacity', 1);



            // Append tooltip
            // ------------------------------

            // Add tooltip on circle hover
            circles
                .on("mouseover", function (d) {
                    tooltip.offset([-15, 0]).show(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 4);
                })
                .on("mouseout", function (d) {
                    tooltip.hide(d);

                    // Animate circle radius
                    d3.select(this).transition().duration(250).attr('r', 3);
                });

            // Change tooltip direction of first point
            // to always keep it inside chart, useful on mobiles
            lines.each(function (d) {
                d3.select(d3.select(this).selectAll('circle')[0][0])
                    .on("mouseover", function (d) {
                        tooltip.offset([0, 15]).direction('e').show(d);

                        // Animate circle radius
                        d3.select(this).transition().duration(250).attr('r', 4);
                    })
                    .on("mouseout", function (d) {
                        tooltip.direction('n').hide(d);

                        // Animate circle radius
                        d3.select(this).transition().duration(250).attr('r', 3);
                    });
            })

            // Change tooltip direction of last point
            // to always keep it inside chart, useful on mobiles
            lines.each(function (d) {
                d3.select(d3.select(this).selectAll('circle')[0][d3.select(this).selectAll('circle').size() - 1])
                    .on("mouseover", function (d) {
                        tooltip.offset([0, -15]).direction('w').show(d);

                        // Animate circle radius
                        d3.select(this).transition().duration(250).attr('r', 4);
                    })
                    .on("mouseout", function (d) {
                        tooltip.direction('n').hide(d);

                        // Animate circle radius
                        d3.select(this).transition().duration(250).attr('r', 3);
                    })
            })



            // Update chart on date change
            // ------------------------------

            // Set variable for updating visualization
            var lineUpdate = d3.transition(lines);

            // Update lines
            lineUpdate.select("path")
                .attr("d", function(d, i) { return line(d.values); });

            // Update circles
            lineUpdate.selectAll("circle")
                .attr("cy",function(d,i){return y(d.value)})
                .attr("cx", function(d,i){return x(d.date)});

            // Update vertical axes
            d3.transition(svg)
                .select(".d3-axis-vertical")
                .call(yAxis);

            // Update horizontal axes
            d3.transition(svg)
                .select(".d3-axis-horizontal")
                .attr("transform", "translate(0," + height + ")")
                .call(xAxis);



            // Resize chart
            // ------------------------------

            // Call function on window resize
            $(window).on('resize', appSalesResize);

            // Call function on sidebar width change
            $(document).on('click', '.sidebar-control', appSalesResize);

            // Resize function
            //
            // Since D3 doesn't support SVG resize by default,
            // we need to manually specify parts of the graph that need to
            // be updated on window resize
            function appSalesResize() {

                // Layout
                // -------------------------

                // Define width
                width = d3Container.node().getBoundingClientRect().width - margin.left - margin.right;

                // Main svg width
                container.attr("width", width + margin.left + margin.right);

                // Width of appended group
                svg.attr("width", width + margin.left + margin.right);

                // Horizontal range
                x.range([0, width]);

                // Vertical range
                y.range([height, 0]);


                // Chart elements
                // -------------------------

                // Horizontal axis
                svg.select('.d3-axis-horizontal').call(xAxis);

                // Vertical axis
                svg.select('.d3-axis-vertical').call(yAxis.tickSize(0-width));

                // Lines
                svg.selectAll('.d3-line').attr("d", function(d, i) { return line(d.values); });

                // Circles
                svg.selectAll('.d3-line-circle').attr("cx", function(d,i){return x(d.date)})
            }
        }


    }














    // Messages area chart
    // ------------------------------






    // Sparklines
    // ------------------------------











    // Marketing campaigns progress pie chart
    // ------------------------------

    // Initialize chart
    progressMeter("#today-progress", 20, 20, '#7986CB');
    progressMeter("#yesterday-progress", 20, 20, '#7986CB');

    // Chart setup
    function progressMeter(element, width, height, color) {


        // Basic setup
        // ------------------------------

        // Main variables
        var d3Container = d3.select(element),
            border = 2,
            radius = Math.min(width / 2, height / 2) - border,
            twoPi = 2 * Math.PI,
            progress = $(element).data('progress'),
            total = 100;



        // Construct chart layout
        // ------------------------------

        // Arc
        var arc = d3.svg.arc()
            .startAngle(0)
            .innerRadius(0)
            .outerRadius(radius)
            .endAngle(function(d) {
              return (d.value / d.size) * 2 * Math.PI; 
            })



        // Create chart
        // ------------------------------

        // Add svg element
        var container = d3Container.append("svg");

        // Add SVG group
        var svg = container
            .attr("width", width)
            .attr("height", height)
            .append("g")
                .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");



        //
        // Append chart elements
        //

        // Progress group
        var meter = svg.append("g")
            .attr("class", "progress-meter");

        // Background
        meter.append("path")
            .attr("d", arc.endAngle(twoPi))
            .style('fill', '#fff')
            .style('stroke', color)
            .style('stroke-width', 1.5);

        // Foreground
        var foreground = meter.append("path")
            .style('fill', color);

        // Animate foreground path
        foreground
            .transition()
                .ease("cubic-out")
                .duration(2500)
                .attrTween("d", arcTween);


        // Tween arcs
        function arcTween() {
            var i = d3.interpolate(0, progress);
            return function(t) {
                var currentProgress = progress / (100/t);
                var endAngle = arc.endAngle(twoPi * (currentProgress));
                return arc(i(endAngle));
            };
        }
    }




    // Marketing campaigns donut chart
    // ------------------------------

    // Initialize chart
    campaignDonut("#campaigns-donut", 42);

    // Chart setup
    function campaignDonut(element, size) {


        // Basic setup
        // ------------------------------

        // Add data set
        var data = [
            {
                "browser": "Google Adwords",
                "icon": "<i class='icon-google position-left'></i>",
                "value": 1047,
                "color" : "#66BB6A"
            }, {
                "browser": "Social media",
                "icon": "<i class='icon-share4 position-left'></i>",
                "value": 2948,
                "color": "#9575CD"
            }, {
                "browser":"Youtube video",
                "icon": "<i class='icon-youtube position-left'></i>",
                "value": 3909,
                "color": "#FF7043"
            }
        ];

        // Main variables
        var d3Container = d3.select(element),
            distance = 2, // reserve 2px space for mouseover arc moving
            radius = (size/2) - distance,
            sum = d3.sum(data, function(d) { return d.value; })



        // Tooltip
        // ------------------------------

        var tip = d3.tip()
            .attr('class', 'd3-tip')
            .offset([-10, 0])
            .direction('e')
            .html(function (d) {
                return "<ul class='list-unstyled mb-5'>" +
                    "<li>" + "<div class='text-size-base mb-5 mt-5'>" + d.data.icon + d.data.browser + "</div>" + "</li>" +
                    "<li>" + "Visits: &nbsp;" + "<span class='text-semibold pull-right'>" + d.value + "</span>" + "</li>" +
                    "<li>" + "Share: &nbsp;" + "<span class='text-semibold pull-right'>" + (100 / (sum / d.value)).toFixed(2) + "%" + "</span>" + "</li>" +
                "</ul>";
            })



        // Create chart
        // ------------------------------

        // Add svg element
        var container = d3Container.append("svg").call(tip);
        
        // Add SVG group
        var svg = container
            .attr("width", size)
            .attr("height", size)
            .append("g")
                .attr("transform", "translate(" + (size / 2) + "," + (size / 2) + ")");  



        // Construct chart layout
        // ------------------------------

        // Pie
        var pie = d3.layout.pie()
            .sort(null)
            .startAngle(Math.PI)
            .endAngle(3 * Math.PI)
            .value(function (d) { 
                return d.value;
            }); 

        // Arc
        var arc = d3.svg.arc()
            .outerRadius(radius)
            .innerRadius(radius / 2);



        //
        // Append chart elements
        //

        // Group chart elements
        var arcGroup = svg.selectAll(".d3-arc")
            .data(pie(data))
            .enter()
            .append("g") 
                .attr("class", "d3-arc")
                .style('stroke', '#fff')
                .style('cursor', 'pointer');
        
        // Append path
        var arcPath = arcGroup
            .append("path")
            .style("fill", function (d) { return d.data.color; });

        // Add tooltip
        arcPath
            .on('mouseover', function (d, i) {

                // Transition on mouseover
                d3.select(this)
                .transition()
                    .duration(500)
                    .ease('elastic')
                    .attr('transform', function (d) {
                        d.midAngle = ((d.endAngle - d.startAngle) / 2) + d.startAngle;
                        var x = Math.sin(d.midAngle) * distance;
                        var y = -Math.cos(d.midAngle) * distance;
                        return 'translate(' + x + ',' + y + ')';
                    });
            })

            .on("mousemove", function (d) {
                
                // Show tooltip on mousemove
                tip.show(d)
                    .style("top", (d3.event.pageY - 40) + "px")
                    .style("left", (d3.event.pageX + 30) + "px");
            })

            .on('mouseout', function (d, i) {

                // Mouseout transition
                d3.select(this)
                .transition()
                    .duration(500)
                    .ease('bounce')
                    .attr('transform', 'translate(0,0)');

                // Hide tooltip
                tip.hide(d);
            });

        // Animate chart on load
        arcPath
            .transition()
                .delay(function(d, i) { return i * 500; })
                .duration(500)
                .attrTween("d", function(d) {
                    var interpolate = d3.interpolate(d.startAngle,d.endAngle);
                    return function(t) {
                        d.endAngle = interpolate(t);
                        return arc(d);  
                    }; 
                });
    }




    // Campaign status donut chart
    // ------------------------------

    // Initialize chart
    campaignStatusPie("#campaign-status-pie", 42);

    // Chart setup
    function campaignStatusPie(element, size) {


        // Basic setup
        // ------------------------------

        // Add data set
        var data = [
            {
                "status": "Active campaigns",
                "icon": "<span class='status-mark border-blue-300 position-left'></span>",
                "value": 439,
                "color": "#29B6F6"
            }, {
                "status": "Closed campaigns",
                "icon": "<span class='status-mark border-danger-300 position-left'></span>",
                "value": 290,
                "color": "#EF5350"
            }, {
                "status": "Pending campaigns",
                "icon": "<span class='status-mark border-success-300 position-left'></span>",
                "value": 190,
                "color": "#81C784"
            }, {
                "status": "Campaigns on hold",
                "icon": "<span class='status-mark border-grey-300 position-left'></span>",
                "value": 148,
                "color": "#999"
            }
        ];

        // Main variables
        var d3Container = d3.select(element),
            distance = 2, // reserve 2px space for mouseover arc moving
            radius = (size/2) - distance,
            sum = d3.sum(data, function(d) { return d.value; })



        // Tooltip
        // ------------------------------

        var tip = d3.tip()
            .attr('class', 'd3-tip')
            .offset([-10, 0])
            .direction('e')
            .html(function (d) {
                return "<ul class='list-unstyled mb-5'>" +
                    "<li>" + "<div class='text-size-base mb-5 mt-5'>" + d.data.icon + d.data.status + "</div>" + "</li>" +
                    "<li>" + "Total: &nbsp;" + "<span class='text-semibold pull-right'>" + d.value + "</span>" + "</li>" +
                    "<li>" + "Share: &nbsp;" + "<span class='text-semibold pull-right'>" + (100 / (sum / d.value)).toFixed(2) + "%" + "</span>" + "</li>" +
                "</ul>";
            })



        // Create chart
        // ------------------------------

        // Add svg element
        var container = d3Container.append("svg").call(tip);
        
        // Add SVG group
        var svg = container
            .attr("width", size)
            .attr("height", size)
            .append("g")
                .attr("transform", "translate(" + (size / 2) + "," + (size / 2) + ")");  



        // Construct chart layout
        // ------------------------------

        // Pie
        var pie = d3.layout.pie()
            .sort(null)
            .startAngle(Math.PI)
            .endAngle(3 * Math.PI)
            .value(function (d) { 
                return d.value;
            }); 

        // Arc
        var arc = d3.svg.arc()
            .outerRadius(radius)
            .innerRadius(radius / 2);



        //
        // Append chart elements
        //

        // Group chart elements
        var arcGroup = svg.selectAll(".d3-arc")
            .data(pie(data))
            .enter()
            .append("g") 
                .attr("class", "d3-arc")
                .style('stroke', '#fff')
                .style('cursor', 'pointer');
        
        // Append path
        var arcPath = arcGroup
            .append("path")
            .style("fill", function (d) { return d.data.color; });

        // Add tooltip
        arcPath
            .on('mouseover', function (d, i) {

                // Transition on mouseover
                d3.select(this)
                .transition()
                    .duration(500)
                    .ease('elastic')
                    .attr('transform', function (d) {
                        d.midAngle = ((d.endAngle - d.startAngle) / 2) + d.startAngle;
                        var x = Math.sin(d.midAngle) * distance;
                        var y = -Math.cos(d.midAngle) * distance;
                        return 'translate(' + x + ',' + y + ')';
                    });
            })

            .on("mousemove", function (d) {
                
                // Show tooltip on mousemove
                tip.show(d)
                    .style("top", (d3.event.pageY - 40) + "px")
                    .style("left", (d3.event.pageX + 30) + "px");
            })

            .on('mouseout', function (d, i) {

                // Mouseout transition
                d3.select(this)
                .transition()
                    .duration(500)
                    .ease('bounce')
                    .attr('transform', 'translate(0,0)');

                // Hide tooltip
                tip.hide(d);
            });

        // Animate chart on load
        arcPath
            .transition()
                .delay(function(d, i) { return i * 500; })
                .duration(500)
                .attrTween("d", function(d) {
                    var interpolate = d3.interpolate(d.startAngle,d.endAngle);
                    return function(t) {
                        d.endAngle = interpolate(t);
                        return arc(d);  
                    }; 
                });
    }




    // Tickets status donut chart
    // ------------------------------

    // Initialize chart
    ticketStatusDonut("#tickets-status", 42);

    // Chart setup
    function ticketStatusDonut(element, size) {


        // Basic setup
        // ------------------------------

        // Add data set
        var data = [
            {
                "status": "Pending tickets",
                "icon": "<i class='status-mark border-blue-300 position-left'></i>",
                "value": 295,
                "color": "#29B6F6"
            }, {
                "status": "Resolved tickets",
                "icon": "<i class='status-mark border-success-300 position-left'></i>",
                "value": 189,
                "color": "#66BB6A"
            }, {
                "status": "Closed tickets",
                "icon": "<i class='status-mark border-danger-300 position-left'></i>",
                "value": 277,
                "color": "#EF5350"
            }
        ];

        // Main variables
        var d3Container = d3.select(element),
            distance = 2, // reserve 2px space for mouseover arc moving
            radius = (size/2) - distance,
            sum = d3.sum(data, function(d) { return d.value; })



        // Tooltip
        // ------------------------------

        var tip = d3.tip()
            .attr('class', 'd3-tip')
            .offset([-10, 0])
            .direction('e')
            .html(function (d) {
                return "<ul class='list-unstyled mb-5'>" +
                    "<li>" + "<div class='text-size-base mb-5 mt-5'>" + d.data.icon + d.data.status + "</div>" + "</li>" +
                    "<li>" + "Total: &nbsp;" + "<span class='text-semibold pull-right'>" + d.value + "</span>" + "</li>" +
                    "<li>" + "Share: &nbsp;" + "<span class='text-semibold pull-right'>" + (100 / (sum / d.value)).toFixed(2) + "%" + "</span>" + "</li>" +
                "</ul>";
            })



        // Create chart
        // ------------------------------

        // Add svg element
        var container = d3Container.append("svg").call(tip);
        
        // Add SVG group
        var svg = container
            .attr("width", size)
            .attr("height", size)
            .append("g")
                .attr("transform", "translate(" + (size / 2) + "," + (size / 2) + ")");  



        // Construct chart layout
        // ------------------------------

        // Pie
        var pie = d3.layout.pie()
            .sort(null)
            .startAngle(Math.PI)
            .endAngle(3 * Math.PI)
            .value(function (d) { 
                return d.value;
            }); 

        // Arc
        var arc = d3.svg.arc()
            .outerRadius(radius)
            .innerRadius(radius / 2);



        //
        // Append chart elements
        //

        // Group chart elements
        var arcGroup = svg.selectAll(".d3-arc")
            .data(pie(data))
            .enter()
            .append("g") 
                .attr("class", "d3-arc")
                .style('stroke', '#fff')
                .style('cursor', 'pointer');
        
        // Append path
        var arcPath = arcGroup
            .append("path")
            .style("fill", function (d) { return d.data.color; });

        // Add tooltip
        arcPath
            .on('mouseover', function (d, i) {

                // Transition on mouseover
                d3.select(this)
                .transition()
                    .duration(500)
                    .ease('elastic')
                    .attr('transform', function (d) {
                        d.midAngle = ((d.endAngle - d.startAngle) / 2) + d.startAngle;
                        var x = Math.sin(d.midAngle) * distance;
                        var y = -Math.cos(d.midAngle) * distance;
                        return 'translate(' + x + ',' + y + ')';
                    });
            })

            .on("mousemove", function (d) {
                
                // Show tooltip on mousemove
                tip.show(d)
                    .style("top", (d3.event.pageY - 40) + "px")
                    .style("left", (d3.event.pageX + 30) + "px");
            })

            .on('mouseout', function (d, i) {

                // Mouseout transition
                d3.select(this)
                .transition()
                    .duration(500)
                    .ease('bounce')
                    .attr('transform', 'translate(0,0)');

                // Hide tooltip
                tip.hide(d);
            });

        // Animate chart on load
        arcPath
            .transition()
                .delay(function(d, i) { return i * 500; })
                .duration(500)
                .attrTween("d", function(d) {
                    var interpolate = d3.interpolate(d.startAngle,d.endAngle);
                    return function(t) {
                        d.endAngle = interpolate(t);
                        return arc(d);  
                    }; 
                });
    }




    // Bar charts with random data
    // ------------------------------

    // Initialize charts
    //generateBarChart("#hours-available-bars", 24, 40, true, "elastic", 1200, 50, "#EC407A", "hours");
    //generateBarChart("#goal-bars", 24, 40, true, "elastic", 1200, 50, "#5C6BC0", "goal");
    //generateBarChart("#members-online", 24, 50, true, "elastic", 1200, 50, "rgba(255,255,255,0.5)", "members");

    // Chart setup
    function generateBarChart(element, barQty, height, animate, easing, duration, delay, color, tooltip) {


        // Basic setup
        // ------------------------------

        // Add data set
        var bardata = [];
        for (var i=0; i < barQty; i++) {
            bardata.push(Math.round(Math.random()*10) + 10)
        }

        // Main variables
        var d3Container = d3.select(element),
            width = d3Container.node().getBoundingClientRect().width;
        


        // Construct scales
        // ------------------------------

        // Horizontal
        var x = d3.scale.ordinal()
            .rangeBands([0, width], 0.3)

        // Vertical
        var y = d3.scale.linear()
            .range([0, height]);



        // Set input domains
        // ------------------------------

        // Horizontal
        x.domain(d3.range(0, bardata.length))

        // Vertical
        y.domain([0, d3.max(bardata)])



        // Create chart
        // ------------------------------

        // Add svg element
        var container = d3Container.append('svg');

        // Add SVG group
        var svg = container
            .attr('width', width)
            .attr('height', height)
            .append('g');



        //
        // Append chart elements
        //

        // Bars
        var bars = svg.selectAll('rect')
            .data(bardata)
            .enter()
            .append('rect')
                .attr('class', 'd3-random-bars')
                .attr('width', x.rangeBand())
                .attr('x', function(d,i) {
                    return x(i);
                })
                .style('fill', color);



        // Tooltip
        // ------------------------------

        var tip = d3.tip()
            .attr('class', 'd3-tip')
            .offset([-10, 0]);

        // Show and hide
        if(tooltip == "hours" || tooltip == "goal" || tooltip == "members") {
            bars.call(tip)
                .on('mouseover', tip.show)
                .on('mouseout', tip.hide);
        }

        // Daily meetings tooltip content
        if(tooltip == "hours") {
            tip.html(function (d, i) {
                return "<div class='text-center'>" +
                        "<h6 class='no-margin'>" + d + "</h6>" +
                        "<span class='text-size-small'>meetings</span>" +
                        "<div class='text-size-small'>" + i + ":00" + "</div>" +
                    "</div>"
            });
        }

        // Statements tooltip content
        if(tooltip == "goal") {
            tip.html(function (d, i) {
                return "<div class='text-center'>" +
                        "<h6 class='no-margin'>" + d + "</h6>" +
                        "<span class='text-size-small'>statements</span>" +
                        "<div class='text-size-small'>" + i + ":00" + "</div>" +
                    "</div>"
            });
        }

        // Online members tooltip content
        if(tooltip == "members") {
            tip.html(function (d, i) {
                return "<div class='text-center'>" +
                        "<h6 class='no-margin'>" + d + "0" + "</h6>" +
                        "<span class='text-size-small'>members</span>" +
                        "<div class='text-size-small'>" + i + ":00" + "</div>" +
                    "</div>"
            });
        }



        // Bar loading animation
        // ------------------------------

        // Choose between animated or static
        if(animate) {
            withAnimation();
        } else {
            withoutAnimation();
        }

        // Animate on load
        function withAnimation() {
            bars
                .attr('height', 0)
                .attr('y', height)
                .transition()
                    .attr('height', function(d) {
                        return y(d);
                    })
                    .attr('y', function(d) {
                        return height - y(d);
                    })
                    .delay(function(d, i) {
                        return i * delay;
                    })
                    .duration(duration)
                    .ease(easing);
        }

        // Load without animateion
        function withoutAnimation() {
            bars
                .attr('height', function(d) {
                    return y(d);
                })
                .attr('y', function(d) {
                    return height - y(d);
                })
        }



        // Resize chart
        // ------------------------------

        // Call function on window resize
        $(window).on('resize', barsResize);

        // Call function on sidebar width change
        $(document).on('click', '.sidebar-control', barsResize);

        // Resize function
        // 
        // Since D3 doesn't support SVG resize by default,
        // we need to manually specify parts of the graph that need to 
        // be updated on window resize
        function barsResize() {

            // Layout variables
            width = d3Container.node().getBoundingClientRect().width;


            // Layout
            // -------------------------

            // Main svg width
            container.attr("width", width);

            // Width of appended group
            svg.attr("width", width);

            // Horizontal range
            x.rangeBands([0, width], 0.3);


            // Chart elements
            // -------------------------

            // Bars
            svg.selectAll('.d3-random-bars')
                .attr('width', x.rangeBand())
                .attr('x', function(d,i) {
                    return x(i);
                });
        }
    }




    // Animated progress chart
    // ------------------------------

    // Initialize charts
    progressCounter('#hours-available-progress', 38, 2, "#F06292", 0.68, "icon-watch text-pink-400", 'Hours available', '64% average')
    progressCounter('#goal-progress', 38, 2, "#5C6BC0", 0.82, "icon-trophy3 text-indigo-400", 'Productivity goal', '87% average')

    // Chart setup
    function progressCounter(element, radius, border, color, end, iconClass, textTitle, textAverage) {


        // Basic setup
        // ------------------------------

        // Main variables
        var d3Container = d3.select(element),
            startPercent = 0,
            iconSize = 32,
            endPercent = end,
            twoPi = Math.PI * 2,
            formatPercent = d3.format('.0%'),
            boxSize = radius * 2;

        // Values count
        var count = Math.abs((endPercent - startPercent) / 0.01);

        // Values step
        var step = endPercent < startPercent ? -0.01 : 0.01;



        // Create chart
        // ------------------------------

        // Add SVG element
        var container = d3Container.append('svg');

        // Add SVG group
        var svg = container
            .attr('width', boxSize)
            .attr('height', boxSize)
            .append('g')
                .attr('transform', 'translate(' + (boxSize / 2) + ',' + (boxSize / 2) + ')');



        // Construct chart layout
        // ------------------------------

        // Arc
        var arc = d3.svg.arc()
            .startAngle(0)
            .innerRadius(radius)
            .outerRadius(radius - border);



        //
        // Append chart elements
        //

        // Paths
        // ------------------------------

        // Background path
        svg.append('path')
            .attr('class', 'd3-progress-background')
            .attr('d', arc.endAngle(twoPi))
            .style('fill', '#eee');

        // Foreground path
        var foreground = svg.append('path')
            .attr('class', 'd3-progress-foreground')
            .attr('filter', 'url(#blur)')
            .style('fill', color)
            .style('stroke', color);

        // Front path
        var front = svg.append('path')
            .attr('class', 'd3-progress-front')
            .style('fill', color)
            .style('fill-opacity', 1);



        // Text
        // ------------------------------

        // Percentage text value
        var numberText = d3.select(element)
            .append('h2')
                .attr('class', 'mt-15 mb-5')

        // Icon
        d3.select(element)
            .append("i")
                .attr("class", iconClass + " counter-icon")
                .attr('style', 'top: ' + ((boxSize - iconSize) / 2) + 'px');

        // Title
        d3.select(element)
            .append('div')
                .text(textTitle);

        // Subtitle
        d3.select(element)
            .append('div')
                .attr('class', 'text-size-small text-muted')
                .text(textAverage);



        // Animation
        // ------------------------------

        // Animate path
        function updateProgress(progress) {
            foreground.attr('d', arc.endAngle(twoPi * progress));
            front.attr('d', arc.endAngle(twoPi * progress));
            numberText.text(formatPercent(progress));
        }

        // Animate text
        var progress = startPercent;
        (function loops() {
            updateProgress(progress);
            if (count > 0) {
                count--;
                progress += step;
                setTimeout(loops, 10);
            }
        })();
    }




    // Bullet charts
    // ------------------------------





    // Other codes
    // ------------------------------

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
