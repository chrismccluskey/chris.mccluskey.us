window.mccluskey = {
  handler: {}
}

mccluskey.ready = function() {
  var
    $menuButton         = document.getElementById('menu-button'),
    $menuButtonLabel    = document.getElementById('menu-button-label'),
    $menu               = document.getElementById('menu'),
    menuExpandedBreakpoint = 900,
    handler;

  handler = {
    menuClick: function(event) {
      if(window.innerWidth < menuExpandedBreakpoint) {
        if($menu.style.marginTop == '5em') {
          var height = $menu.clientHeight;
          $menu.style.marginTop = '-'+height+'px';
        } else {
          $menu.style.marginTop = '5em';
        }
      }
    }
  }

  $menuButton.addEventListener('click', handler.menuClick);

  mccluskey.handler = handler;
}

document.addEventListener('DOMContentLoaded', mccluskey.ready);
