Package.describe({
  name: 'dangrossman:bootstrap-daterangepicker',
  version: '2.1.27',
  summary: 'Date range picker component for Bootstrap',
  git: 'https://github.com/dangrossman/bootstrap-daterangepicker',
  documentation: 'README.md'
});

Package.onUse(function(api) {
  api.versionsFrom('METEOR@0.9.0.1');

  api.use('twbs:bootstrap@3.3.4', ["clients"], {weak: true});
  api.use('momentjs:moment@2.10.3', ["clients"]);
  api.use('jquery@1.11.3_2', ["clients"]);

  api.addFiles('daterangepicker.js', ["clients"]);
  api.addFiles('daterangepicker.css', ["clients"]);
});
