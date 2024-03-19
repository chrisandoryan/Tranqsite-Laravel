<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('header')
</head>

@include('alerts.error')
@include('alerts.success')
@include('nav')

<body class="hack dark">
	<div class="grid main-form">
    <form class="form" method="POST" action="">
      <fieldset class="form-group">
        <label for="username">Title:</label>
        <input id="title" name="title" type="text" placeholder="" class="form-control">
      </fieldset>
      <fieldset class="form-group">
        <label for="recipient">To:</label>
        <select id="recipient" name="recipient" class="form-control">
          <option value="1">Administrator</option>
          <option value="2">Network Manager</option>
          <option value="3">IT Support</option>
          <option value="4">Coworker</option>
        </select>
      </fieldset>
      <fieldset class="form-group form-textarea">
        <label for="message">Message:</label>
        <textarea id="message" rows="5" class="form-control" name="message"></textarea>
      </fieldset>
      <div class="form-actions">
        <input type="submit" class="btn btn-primary btn-block btn-ghost" name="send" />
      </div>
    </form>
	</div>
	<div class="footer">
		O le ale strontos, vi gaskar magheda
	</div>
</body>
</html>