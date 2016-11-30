function dateandtimeLoader(mode)
{
  var date = new Date();
  var dateString = "";
  if(mode == "T")
  {
    dateString = date.toLocaleTimeString();
  }else if (mode == "D") {
    dateString = date.toLocaleDateString();
  }else if (mode == "R") {
    dateString = date.toLocaleDateString() + " " + date.toLocaleTimeString();
  }
  return dateString;
}
function clockRender()
{
  $("#dateandTime").html(dateandtimeLoader("T"));
  setTimeout(clockRender,1000);
}
