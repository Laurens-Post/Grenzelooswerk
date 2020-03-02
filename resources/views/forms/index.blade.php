<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1>Grenzelooswerk test form</h1>

@foreach ($forms as $form)
    <li> {{ $form->country}}  </li>
@endforeach

</body>
</html>