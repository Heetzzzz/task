<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Task 13</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.min.css" />
   
    <style>
        #my-widget {
            width: 100px;
            background-color: bisque;
            position: absolute;
            top: -50px;
            left: 0px;
            display: none;
        }

        #my-widget .my-widget-minus{
            float: left;
        }

        #my-widget .my-widget-minus:focus{
            box-shadow: unset;
        }

        #my-widget .my-widget-value{
            float: left;
            margin: 0;
            padding: 0;
            width: 28px;
            height: 38px;
            text-align: center;
            line-height: 38px;
        }

        #my-widget .my-widget-plus {
            float: right;
        }

        #my-widget .my-widget-plus:focus {
            box-shadow: unset;
        }
    </style>
</head>

<body>

    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-3">
                <input id='txtbox1' class='txtInput' type='text'>
            </div>
            <div class="col-3">
                <input id='txtbox2' class='txtInput' type='text'>
            </div>
            <div class="col-3">
                <input id='txtbox3' class='txtInput' type='text'>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>

    <script type="text/javascript">
        $.widget("custom.mywidget", {
        
            options: {
                myvalue: 0
            },
            _create: function () {
                $(this.element).val(this.options.myvalue);
                $(this.element).addClass("my-widget-input")
                this._on(this.element, {
                    "focus": function (event) {
                        
                        var input_position = $(event.target).offset();
                        var targetHeight = $(event.target).height() + 6;
                        var targetWidth = ($(event.target).width() - 2);

                        this._generateHtml();
                       
                        $("#my-widget").css({ //widget move
                            'top': (input_position.top + targetHeight) + 'px',
                            'left': (input_position.left) + 'px'
                        });
                        $("#my-widget").fadeIn();

                        $("#my-widget .my-widget-value").html(this.options.myvalue);
                    }
                });
                $(document).on("mousedown", this._hideWidget);
            },
            _generateHtml: function () {
                $("#my-widget").remove();
                $("body").append('<div id="my-widget">' +
                    '<button type="button" class="btn btn-info my-widget-minus">-</button>' +
                    '<p class="my-widget-value"></p>' +
                    '<button type="button" class="btn btn-info my-widget-plus">+</button>' +
                    '</div>');

                var that = this;
                // $("#my-widget .my-widget-plus").off("click");
                // $("#my-widget .my-widget-minus").off("click");

                $("#my-widget .my-widget-plus").on("click", function () {
                    that.options.myvalue++;
                    $(that.element).val(that.options.myvalue);
                    $("#my-widget .my-widget-value").html(that.options.myvalue);
                });

                $("#my-widget .my-widget-minus").on("click", function () {
                    that.options.myvalue--;
                    $(that.element).val(that.options.myvalue);
                    $("#my-widget .my-widget-value").html(that.options.myvalue);
                });
            },
            _hideWidget: function () {
                var $target = $(event.target);
                if (!$target.closest("#my-widget").length && !$target.hasClass("my-widget-input")) 
                {
                    $("#my-widget").fadeOut();
                }
            },
            // _setOption: function (key, value) {
            //     if (key === "value") 
            //     {
            //         value = this._constrain(value);
            //     }
            //     this._super(key, value);
            // },
            // _setOptions: function (options) {
            //     this._super(options);
            //     // this.refresh();
            // },
        });
    </script>
    <script>

        $(document).ready(function () {
            $("#txtbox1").mywidget({
                myvalue: -1
            });
            $("#txtbox2").mywidget({
                myvalue: 0
            });
            $("#txtbox3").mywidget({
                myvalue: -1
            });
        });

    </script>
</body>
</html>