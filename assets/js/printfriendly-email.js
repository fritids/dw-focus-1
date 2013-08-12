var EmailStory = (function(window, undef) {
  var EmailStory = {},
      url = '',
      readyCalled = isReady = false,
      head = document.getElementsByTagName('head')[0];

  try {url = top.location.href + '?paperboy=loggedin&utm_source=emailed2friend'} catch(e) {url = window.location.href + '?paperboy=loggedin&utm_source=emailed2friend'}

  var emailSrc = 'http://pdf.printfriendly.com/email/from_url' + '?product=1&url=' + encodeURIComponent(url);

  function addStyles() {
    var style = document.createElement('style'),
        rules = document.createTextNode('#email-story-wrapper {text-align:center; overflow: hidden; position:absolute; top: 120px; left:50%; z-index:16777269; margin-left:-350px; padding:12px; background-color:rgba(0, 0, 0, 0.51); filter:progid:DXImageTransform.Microsoft.gradient(startColorStr=\'#82000000\',EndColorStr=\'#82000000\');} ');
    style.type = 'text/css';
    if(style.styleSheet) {
      style.styleSheet.cssText = rules.nodeValue;
    } else  {
      style.appendChild(rules);
    }
    head.appendChild(style);
  }

  function remove(id) {
    var elem = document.getElementById(id);
    elem.parentNode.removeChild(elem);
  }

  function show(id) {
    var elem = document.getElementById(id);
    elem.style.display = 'block'
  }

  function hide(id) {
    var elem = document.getElementById(id);
    elem.style.display = 'none'
  }

  function addMask() {
    var mask = document.createElement('div');
    mask.setAttribute('id','email-story-mask');
    document.body.appendChild(mask);
  }

  function setupIframe() {
    var wrapperId = 'email-story-wrapper';
    var wrapper = document.getElementById(wrapperId);
    if(wrapper) {
      iframe = document.getElementById('email-story-iframe');
      iframe.src = emailSrc;
      show(wrapperId);
    } else {
      wrapper = document.createElement('div');
      wrapper.setAttribute('id', wrapperId);
      document.body.appendChild(wrapper);
      wrapper.innerHTML = [
          '<a href="#" onClick="EmailStory.cleanup();return false" style="position:absolute;right:0; top:0; z-index:16777270; width:69px;height:60px; background:url(\'http://cdn.printfriendly.com/images/btn-close-pf-confirm.png\') no-repeat 26px 20px;"></a>',
          '<iframe frameborder="0" id="email-story-iframe" style="width: 700px; height:384px; overflow:hidden; z-index:16777270; background:#E2E2E2 url(\'http://cdn.printfriendly.com/ajax-loader.gif\') no-repeat 50% 50%;"',
            'src="', emailSrc, '"></iframe>',
        ].join(' ');
    }
  }

  EmailStory.cleanup = function() {
    hide('email-story-wrapper');
    remove('email-story-mask');
  }

  EmailStory.init = function() {
    EmailStory.ready(function() {
      addStyles();
      addMask();
      setupIframe();
    })
  }

  EmailStory.applyCallback = function(callback) {
    isReady = true;
    // setTimeout for an edge case
    // http://bugs.jquery.com/ticket/5443
    return setTimeout(callback, 1);
  }

  EmailStory.ready = function(callback) {
    if (isReady)
      return callback();

    if (readyCalled)
        return;
    readyCalled = true;

    if (/complete|loaded|interactive/.test(document.readyState)) {
      EmailStory.applyCallback(callback);
    }
    var onReady, onComplete, done;
    // For awesome browsers
    if (document.addEventListener) {
      onComplete = function () {
        document.removeEventListener('DOMContentLoaded', onComplete, false);
        window.removeEventListener('load', onComplete, false)
        if (!done) {
            done = true;
            EmailStory.applyCallback(callback);
        }
      }
      document.addEventListener('DOMContentLoaded', onComplete, false);
      window.addEventListener('load', onComplete, false)
    } else if (document.attachEvent) {
      onComplete = function () {
        document.detachEvent('onreadystatechange', onReady);
        window.detachEvent('onload', onComplete);
        if (!done) {
            done = true;
            EmailStory.applyCallback(callback);
        }
      }
      onReady = function () {
        if (document.readyState === 'complete')
          onComplete();
      }
      document.attachEvent('onreadystatechange', onReady);
      window.attachEvent('onload', onComplete);
    }
  }

  return EmailStory;
})(window);
if(window['pfAutoStart']) {
  EmailStory.init();
}
