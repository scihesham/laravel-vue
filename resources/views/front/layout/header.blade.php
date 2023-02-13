<!doctype html>
<html lang="en">

<head>
  <?php $fileVersion = 0.260 ?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{url('design/front/images/logo.jpeg')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="{{ url('vendor/jquery/css') }}/jquery-ui.css">

  <link rel="stylesheet" href="{{ url('design/front') }}/plugins/selectboxit/jquery.selectBoxIt.css">
  <link rel="stylesheet" href="{{url('design/auto-complete-multiple-select')}}/style.css?n=<?php echo $fileVersion; ?>">
  <link rel="stylesheet" href="{{ url('design/front') }}/css/marquee-animation.css?n=<?php echo $fileVersion; ?>">
  <link rel="stylesheet" href="{{ url('design/front') }}/css/style.css?n=<?php echo $fileVersion; ?>">
  <link rel="stylesheet" href="{{ url('design/front') }}/css/secondary.css?n=<?php echo $fileVersion; ?>">
  <link rel="stylesheet" href="{{ url('design/front') }}/css/directions.css?n=<?php echo $fileVersion; ?>">
  @if(app()->getLocale() == 'en')
  <link rel="stylesheet" href="{{ url('design/front') }}/css/en.css?n=<?php echo $fileVersion; ?>">
  @endif
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ url('vendor/jquery/js') }}/jquery-3.1.1.min.js"></script>

  <input id="base_url" type="hidden" value="<?= url('/') ?>">




  <script src="design/front/js/report/design/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: 'textarea.tinymce',
      plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons template',
      editimage_cors_hosts: ['picsum.photos'],
      menubar: 'file edit view insert format tools table help',
      toolbar: ['customDateButton |table | undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist ',
        'forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl | custom_dialog|add_space add_grid '
      ],
      content_css: ["{{asset('design/front/js/report/design/custom_css_tinymce.css')}}"],
      font_formats: "Segoe UI=Segoe UI;",
      fontsize_formats: "8px 9px 10px 11px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 52px 54px 56px 58px 60px 62px 64px 66px 68px 70px 72px 74px 76px 78px 80px 82px 84px 86px 88px 90px 92px 94px 94px 96px",
      height: 600,
      directionality: "rtl",
      table_advtab: true,
      table_row_advtab: true,
      table_cell_advtab: true,
      table_column_resizing: 'preservetable', //The table width is maintained when manipulating table columns by changing the size of nearby columns
      table_resize_bars: true,
      table_sizing_mode: 'relative',
      table_header_type: 'section',
      table_use_colgroups: false,
      /*table_default_styles: {
        width: '100%'
      },*/
      menu: {
        table: {
          title: 'Table',
          items: 'inserttable | inserttabledialog | cell row column | advtablesort | tableprops deletetable'
        },
      },
      table_grid: true,
      table_border_widths: [{
          title: 'small',
          value: '1px'
        },
        {
          title: 'medium',
          value: '3px'
        },
        {
          title: 'large',
          value: '5px'
        },
      ],
      table_class_list: [{
          title: 'none',
          value: ''
        },
        {
          title: 'جدول تابع',
          value: 'table_footer'
        },
        {
          title: 'راس الجدول',
          value: 'main_table'
        },
        {
          title: 'فوتر متكرر لصفحات الطباعه',
          value: 'printFooter'
        },
      ],
      table_cell_class_list: [{
        title: 'none',
        value: ''
      }, ],
      setup: function(editor) {
        editor.ui.registry.addButton('custom_dialog', {
          text: 'اضافة خلية مدورة',
          onAction: function() {
            // Open a Dialog
            editor.windowManager.open({
              title: 'اضافة خلية مدورة',
              body: {
                type: 'panel',
                items: [{
                  type: 'selectbox',
                  name: 'raduis',
                  label: 'اختر نوع الاطار',
                  items: [{
                      text: 'مستقيم',
                      value: '0'
                    },
                    {
                      text: 'دائري',
                      value: '25'
                    }

                  ],
                  flex: true
                }, {
                  type: 'colorpicker',
                  name: 'BG_color',
                  label: 'Select style',

                  flex: true
                }, {
                  type: 'colorpicker',
                  name: 'border_color',
                  label: 'Select style',

                  flex: true
                }]
              },
              onSubmit: function(api) {
                // insert markup
                node = editor.selection.getNode();
                console.log(node);
                // var newElement = document.createElement("span");

                node.innerHTML = '<span class="none-padding" style="border-radius: ' + api.getData().raduis + 'px; border: 2px solid ' + api.getData().border_color + ';background:' + api.getData().BG_color + '">' + node.innerHTML + '</span>';
                // node.innerHTML=newElement, node;
                // editor.insertContent('Inserted custom data: <span class="color-red"><b>' + api.getData().custom_data + '</b></span> <br>and your selected style: <b>' + api.getData().selected_style) + '</b>';

                // // close the dialog
                api.close();
              },
              buttons: [{
                  text: 'Close',
                  type: 'cancel',
                  onclick: 'close'
                },
                {
                  text: 'Insert',
                  type: 'submit',
                  primary: true,
                  enabled: true
                }
              ]
            });
          }
        });

        editor.ui.registry.addButton('add_grid', {
          text: 'اضافة مساحة مقسمة كجدول',
          onAction: function(_) {
            editor.insertContent("<table style='width: 100%; direction: rtl; border-collapse: separate; border-spacing: 3px;'><tbody><tr><td><strong>text</strong></td><td>text</td><td><strong>text</strong></td></tr></tbody></table>");
          }
        });

        editor.ui.registry.addButton('add_space', {
          text: 'اضافة مسافة فاصلة',
          onAction: function(_) {
            editor.insertContent("<table style='width: 100%; font-size: 5px; height: 5px; direction: rtl;'><tbody><tr><td>&nbsp;</td></tr></tbody></table>");
          }
        });

        var toTimeHtml = function(date) {
          return '<time datetime="' + date.toString() + '">' + date.toDateString() + '</time>';
        };

        editor.ui.registry.addButton('customDateButton', {
          icon: 'insert-time',
          tooltip: 'Insert Current Date',
          disabled: true,
          onAction: function(_) {
            editor.insertContent(toTimeHtml(new Date()));
          },
        });
      },
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',

      autosave_ask_before_unload: true,
      autosave_interval: '30s',
      autosave_prefix: '{path}{query}-{id}-',
      autosave_restore_when_empty: false,
      autosave_retention: '2m',
      image_advtab: true,
      link_list: [{
          title: 'My page 1',
          value: 'https://www.tiny.cloud'
        },
        {
          title: 'My page 2',
          value: 'http://www.moxiecode.com'
        }
      ],
      image_list: [{
          title: 'My page 1',
          value: 'https://www.tiny.cloud'
        },
        {
          title: 'My page 2',
          value: 'http://www.moxiecode.com'
        }
      ],
      image_class_list: [{
          title: 'None',
          value: ''
        },
        {
          title: 'Some class',
          value: 'class-name'
        }
      ],
      importcss_append: true,

      file_picker_callback: (callback, value, meta) => {
        /* Provide file and text for the link dialog */
        if (meta.filetype === 'file') {
          callback('https://www.google.com/logos/google.jpg', {
            text: 'My text'
          });
        }

        /* Provide image and alt text for the image dialog */
        if (meta.filetype === 'image') {
          callback('https://www.google.com/logos/google.jpg', {
            alt: 'My alt text'
          });
        }

        /* Provide alternative source and posted for the media dialog */
        if (meta.filetype === 'media') {
          callback('movie.mp4', {
            source2: 'alt.ogg',
            poster: 'https://www.google.com/logos/google.jpg'
          });
        }
      },
      templates: [{
        title: 'بداية التقرير مع جدول',
        description: 'تخطيط جاهز يساعد على تصميم بداية الجدول',
        url: "design/front/js/report/design/templates/fixed_header.html"
      }, ],
      toolbar_sticky: false,

    });
    // ','js_external':'https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/6/tinymce.min.js'}"
  </script>


  @yield('header')


  <script src="{{ url('design/front') }}/js/globals.js"></script>

  <!-- merge local invoices -->
  <!-- <script src="{{ url('design/front') }}/js/ajax/mergeLocalSales.js"></script> -->

  <title>
    {{trans('lang.khabeer_tech')}}
  </title>

</head>