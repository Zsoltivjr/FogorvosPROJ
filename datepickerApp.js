var myDate = new Date();
myDate.setDate(myDate.getDate() + 30);

  $(function () {
    $('.datepicker').datepicker({
      language: "es",
      autoclose: true,
      format: "dd/mm/yyyy",
      daysOfWeekDisabled: [0, 6],
      startDate: myDate,
    });
  });
  
