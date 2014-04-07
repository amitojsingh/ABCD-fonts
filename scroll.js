var menu=$('#nav');

var watcher = scrollMonitor.create( #nav );

watcher.lock();

watcher.stateChange(function() {
  $(menu).toggleClass('scrolled', this.isAboveViewport)
});i
