<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @if (isset($thread))
            {{ $thread->title }} -
        @endif
        @if (isset($category))
            {{ $category->title }} -
        @endif
        {{ trans('forum::general.home_title') }}
    </title>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <style>
    textarea {
        min-height: 200px;
    }

    .deleted {
        opacity: 0.65;
    }
    </style>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/forum">JOB WEB BOARD</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/">Home</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    <div class="container">
        @include ('forum::partials.breadcrumbs')
        @include ('forum::partials.alerts')

        @yield('content')
    </div>

    <script>
    var toggle = $('input[type=checkbox][data-toggle-all]');
    var checkboxes = $('table tbody input[type=checkbox]');
    var actions = $('[data-actions]');
    var forms = $('[data-actions-form]');
    var confirmString = "{{ trans('forum::general.generic_confirm') }}";

    function setToggleStates() {
        checkboxes.prop('checked', toggle.is(':checked')).change();
    }

    function setSelectionStates() {
        checkboxes.each(function() {
            var tr = $(this).parents('tr');

            $(this).is(':checked') ? tr.addClass('active') : tr.removeClass('active');

            checkboxes.filter(':checked').length ? $('[data-bulk-actions]').removeClass('hidden') : $('[data-bulk-actions]').addClass('hidden');
        });
    }

    function setActionStates() {
        forms.each(function() {
            var form = $(this);
            var method = form.find('input[name=_method]');
            var selected = form.find('select[name=action] option:selected');
            var depends = form.find('[data-depends]');

            selected.each(function() {
                if ($(this).attr('data-method')) {
                    method.val($(this).data('method'));
                } else {
                    method.val('patch');
                }
            });

            depends.each(function() {
                (selected.val() == $(this).data('depends')) ? $(this).removeClass('hidden') : $(this).addClass('hidden');
            });
        });
    }

    setToggleStates();
    setSelectionStates();
    setActionStates();

    toggle.click(setToggleStates);
    checkboxes.change(setSelectionStates);
    actions.change(setActionStates);

    forms.submit(function() {
        var action = $(this).find('[data-actions]').find(':selected');

        if (action.is('[data-confirm]')) {
            return confirm(confirmString);
        }

        return true;
    });

    $('form[data-confirm]').submit(function() {
        return confirm(confirmString);
    });
    </script>

    @yield('footer')
</body>
</html>
