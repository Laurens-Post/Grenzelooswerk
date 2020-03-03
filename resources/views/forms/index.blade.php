<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="content-wrapper px-xs-0 px-m-24">
    <div class="content-spacing -large">
        <div class="content-box -has-shadow -large">
            <div class="header -sb">
                <h1 class="fs-headline1">Opleidingen</h1>
                <div class="tool-tip -left -center" data-gwtooltip="Opleiding toevoegen" data-js-list="degree">
                    <a class="gw-button -large -shadow -primary -circle" data-do="click->modal#open" data-remote="true" href="form/create" style="overflow: hidden;"><div class="icon">
                            <div class="svg-icon -is-22 -white"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24"><g transform="translate(0, 0)"><path fill="#444444" d="M22,11h-9V2c0-0.6-0.4-1-1-1s-1,0.4-1,1v9H2c-0.6,0-1,0.4-1,1s0.4,1,1,1h9v9c0,0.6,0.4,1,1,1s1-0.4,1-1v-9h9
	c0.6,0,1-0.4,1-1S22.6,11,22,11z"></path></g></svg></div>
                        </div>
                    </a></div>
            </div>
            <div class="body">
                <div class="empty-list">
                    <img class="icon" src="https://assets.yobbers.com/assets/jobseeker/images/profile/degrees-a5efdbdf42320207f3a26693375e6512.svg">
                    <h4 class="title">Hier komen jouw opleidingen te staan.</h4>
                </div>
                <hr>
            </div>
            <div class="footer"></div>
        </div>
    </div>
</div>

@foreach ($forms as $form)
    <li> {{ $form}}  </li>
@endforeach

</body>
</html>