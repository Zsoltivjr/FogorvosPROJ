var myDate = new Date();
myDate.setDate(myDate.getDate() -6570);

  $(function () {
    $('.datepicker').datepicker({
      language: "es",
      autoclose: true,
      format: "dd/mm/yyyy",
      endDate: myDate,
    });
  });
  
