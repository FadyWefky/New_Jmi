<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--**********************************************pagination********************************************-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!--*******************************************Select*****************************************************-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}
#searchNSel
{
  display:flex;
  justify-content: space-between;
  max-width:1200px;
  width:100%;
  margin: 0px auto;
}
#selectedVal
{
  width: 70px;
  float: right;
  border: 1px solid #eeeff3;
}

.input-group-text
{
  background-color: white;
  border: none;
  padding: 7px;
  padding-right:0px;
}
.input-group-text img
{
  width: 20px;
}
.input-group input
{
  border: none;
  color:#b0b1b3;
  width: calc(100% - 30px) !important;
}
.input-group input::placeholder
{
  color:#c0c0c0;
  font-family: Roboto-Light;
}
.input-group input:focus
{
  box-shadow:none;
}
.input-group:focus-within
{
  border: 1px solid #f4a8ca;
}
.input-group
{
  border: 1px solid #eeeff3;
  border-radius: 5px;
  width:50%;
  max-width: 300px;
  margin: 2px;
}
.form-control
{
  box-shadow: none;
}
.parSelectedVal
{
  max-width: 70px;
  border-radius: 3px;
  margin-top: 3px;
}
.input-group-prepend
{
    float: left !important;
}
.serCol
{
  width:90%;
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  min-width: 950px;
  max-width:1200px;
  border: 1px solid #ddd;
  font-size: 18px;
  margin: 0px auto;
}

#myTable th, #myTable .search td {
  text-align: left;
  padding: 12px;
  font-family: Roboto-Light;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover
{
  background-color: #f1f1f1;
}
th
{
  cursor: pointer;
  background-color: #ffc926;
  color: white;
  font-weight: normal;
  width: 20% !important;
}
tr:hover
{
  background-color: white !important;
}
.search:hover
{
  background-color: #f8f8f8 !important;
}
#searchNSel .search:hover
{
    background-color: white !important;
}
.firstArrowImg , .secondArrowImg , .thirdArrowImg , .fourthArrowImg
{
  width: 15px;
  display: none;
}
.collapsible
{
  padding: 1px 6px 0px 6px;
  border:1px solid #e8e9ea;
  background-color: #fbfcfd;
  border-radius: 5px;
  outline: none !important;
}

.add:after
{
  content: url("/assets/m/img/plus.png");
}
.remove:after
{
  content: url("/assets/m/img/remove.png");
}
td p
{
  font-size: 12px;
  background-color: #fffbf1;
  margin: 0px;
  padding: 7px 15px;
  border-bottom: 1px solid #ebeef5;
  font-family: Roboto-Light;
}
td p span
{
  font-weight: bold;
}
/**********************************************pagination*********************************************/
#pagList
{
  justify-content: center;
  display: flex;
  margin-top:20px;
}
#pagList li
{


	margin:5px;

}
#pagList li a:hover
{
	text-decoration:none;
}
#pagList li.active
{
	background-color:#ffc926;
}
.pagination>.active>a
{
  background-color:#ffc926 !important;
  border-color:white !important;
}
#pagList li.active a{color:white;}
#pagList li *
{
	color:black;
}
.show
{
    display: table-row !important;
}
@media only screen and (max-width: 837px)
{
  #myTable
  {
    width: 100%;
    min-width: 935px;
    max-width: 935px;
  }
  .pagination>li>a, .pagination>li>span
  {
    padding: 4px 9px;
  }
  #myTable th, #myTable .search td , .input-group input::placeholder
  {
    font-size: 15px;
  }
  .collapsible
  {
    padding: 1px 3px 0px 3px;
  }
}
@media only screen and (max-width: 500px)
{
  .input-group input::placeholder
  {
    font-size: 11px !important;
  }
  .search
  {
    padding: 0px;
    width:110px;
  }
  .input-group-text
  {
    padding: 5px 0px 5px 5px;
  }
  .form-control
  {
    height: 30px;
    padding: 4px;
  }

  #myTable
  {
    width: 100%;
    min-width: 850px;
    max-width: 850px;
  }
  #myTable th, #myTable .search td , .input-group input::placeholder
  {
    font-size: 13px;
  }
  .collapsible
  {
    padding: 1px 2px 0px 2px;
  }
  td p
  {
    font-size: 11px;
  }
}
</style>
</head>
<body>
<div id="searchNSel">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgoJPGc+CgkJPHBhdGggZD0iTTUwOC44NzUsNDkzLjc5MkwzNTMuMDg5LDMzOC4wMDVjMzIuMzU4LTM1LjkyNyw1Mi4yNDUtODMuMjk2LDUyLjI0NS0xMzUuMzM5QzQwNS4zMzMsOTAuOTE3LDMxNC40MTcsMCwyMDIuNjY3LDAgICAgUzAsOTAuOTE3LDAsMjAyLjY2N3M5MC45MTcsMjAyLjY2NywyMDIuNjY3LDIwMi42NjdjNTIuMDQzLDAsOTkuNDExLTE5Ljg4NywxMzUuMzM5LTUyLjI0NWwxNTUuNzg2LDE1NS43ODYgICAgYzIuMDgzLDIuMDgzLDQuODEzLDMuMTI1LDcuNTQyLDMuMTI1YzIuNzI5LDAsNS40NTgtMS4wNDIsNy41NDItMy4xMjVDNTEzLjA0Miw1MDQuNzA4LDUxMy4wNDIsNDk3Ljk1OCw1MDguODc1LDQ5My43OTJ6ICAgICBNMjAyLjY2NywzODRjLTk5Ljk3OSwwLTE4MS4zMzMtODEuMzQ0LTE4MS4zMzMtMTgxLjMzM1MxMDIuNjg4LDIxLjMzMywyMDIuNjY3LDIxLjMzM1MzODQsMTAyLjY3NywzODQsMjAyLjY2NyAgICBTMzAyLjY0NiwzODQsMjAyLjY2NywzODR6IiBmaWxsPSIjZDNkY2U2IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+Cgk8L2c+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPC9nPjwvc3ZnPg==" /></span>
    </div>
    <input type="text" id="searchTable" placeholder="Search table" class="form-control">
  </div>
  <div class="mb-3 parSelectedVal">
    <select  class="form-control" id="selectedVal">
      <option value="5">5</option>
      <option value="10">10</option>
      <option value="25">25</option>
      <option value="50">50</option>
    </select>
  </div>
</div>
<table id="myTable">
  <tr class="header">
    <th onclick="sortByCol(0)">
      <img class="firstArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="firstArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Symbol
    </th>
    <th onclick="sortByCol(1)">
      <img class="secondArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="secondArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Name
    </th>
    <th onclick="sortByCol(2)">
      <img class="thirdArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="thirdArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Margin %
    </th>
    <th onclick="sortByCol(3)">
      <img class="fourthArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="fourthArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Contract Size
    </th>
    <th onclick="sortByCol(4)">
      <img class="fourthArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDEsLTEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDQ5Mi4wMDQwNTEyMDg0OTYxLC0wLjAwMDAzODE0Njk3MjY4NDY3MTcxKSI+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8cGF0aCBkPSJNNDg0LjE0LDIyNi44ODZMMzA2LjQ2LDQ5LjIwMmMtNS4wNzItNS4wNzItMTEuODMyLTcuODU2LTE5LjA0LTcuODU2Yy03LjIxNiwwLTEzLjk3MiwyLjc4OC0xOS4wNDQsNy44NTZsLTE2LjEzMiwxNi4xMzYgICAgYy01LjA2OCw1LjA2NC03Ljg2LDExLjgyOC03Ljg2LDE5LjA0YzAsNy4yMDgsMi43OTIsMTQuMiw3Ljg2LDE5LjI2NEwzNTUuOSwyMDcuNTI2SDI2LjU4QzExLjczMiwyMDcuNTI2LDAsMjE5LjE1LDAsMjM0LjAwMiAgICB2MjIuODEyYzAsMTQuODUyLDExLjczMiwyNy42NDgsMjYuNTgsMjcuNjQ4aDMzMC40OTZMMjUyLjI0OCwzODguOTI2Yy01LjA2OCw1LjA3Mi03Ljg2LDExLjY1Mi03Ljg2LDE4Ljg2NCAgICBjMCw3LjIwNCwyLjc5MiwxMy44OCw3Ljg2LDE4Ljk0OGwxNi4xMzIsMTYuMDg0YzUuMDcyLDUuMDcyLDExLjgyOCw3LjgzNiwxOS4wNDQsNy44MzZjNy4yMDgsMCwxMy45NjgtMi44LDE5LjA0LTcuODcyICAgIGwxNzcuNjgtMTc3LjY4YzUuMDg0LTUuMDg4LDcuODgtMTEuODgsNy44Ni0xOS4xQzQ5Mi4wMiwyMzguNzYyLDQ4OS4yMjgsMjMxLjk2Niw0ODQuMTQsMjI2Ljg4NnoiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD4KCTwvZz4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8L2c+PC9zdmc+" />
      <img class="fourthArrowImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ5Mi4wMDQgNDkyLjAwNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGcgdHJhbnNmb3JtPSJtYXRyaXgoNi4xMjMyMzM5OTU3MzY3NjZlLTE3LC0xLDEsNi4xMjMyMzM5OTU3MzY3NjZlLTE3LDAuMDAwMDM4MTQ2OTcyNjI3ODI4MjksNDkyLjAwNDA1MTIwODQ5NjEpIj4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik00ODQuMTQsMjI2Ljg4NkwzMDYuNDYsNDkuMjAyYy01LjA3Mi01LjA3Mi0xMS44MzItNy44NTYtMTkuMDQtNy44NTZjLTcuMjE2LDAtMTMuOTcyLDIuNzg4LTE5LjA0NCw3Ljg1NmwtMTYuMTMyLDE2LjEzNiAgICBjLTUuMDY4LDUuMDY0LTcuODYsMTEuODI4LTcuODYsMTkuMDRjMCw3LjIwOCwyLjc5MiwxNC4yLDcuODYsMTkuMjY0TDM1NS45LDIwNy41MjZIMjYuNThDMTEuNzMyLDIwNy41MjYsMCwyMTkuMTUsMCwyMzQuMDAyICAgIHYyMi44MTJjMCwxNC44NTIsMTEuNzMyLDI3LjY0OCwyNi41OCwyNy42NDhoMzMwLjQ5NkwyNTIuMjQ4LDM4OC45MjZjLTUuMDY4LDUuMDcyLTcuODYsMTEuNjUyLTcuODYsMTguODY0ICAgIGMwLDcuMjA0LDIuNzkyLDEzLjg4LDcuODYsMTguOTQ4bDE2LjEzMiwxNi4wODRjNS4wNzIsNS4wNzIsMTEuODI4LDcuODM2LDE5LjA0NCw3LjgzNmM3LjIwOCwwLDEzLjk2OC0yLjgsMTkuMDQtNy44NzIgICAgbDE3Ny42OC0xNzcuNjhjNS4wODQtNS4wODgsNy44OC0xMS44OCw3Ljg2LTE5LjFDNDkyLjAyLDIzOC43NjIsNDg5LjIyOCwyMzEuOTY2LDQ4NC4xNCwyMjYuODg2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=" />
      Tick Size
    </th>
  </tr>
  <tr>
    <td>
      <div class="input-group serCol">
        <input type="text" id="firstCol" onkeyup="searchByCol(0 , 'firstCol')" placeholder="Symbol" class="form-control">
      </div>
    </td>
    <td>
      <div class="input-group serCol">
        <input type="text" id="secondCol" onkeyup="searchByCol(1 , 'secondCol')" placeholder="Name" class="form-control">
      </div>
    </td>
    <td>
      <div class="input-group serCol">
        <input type="text" id="thirdCol" onkeyup="searchByCol(2 , 'thirdCol')" placeholder="Margin" class="form-control">
      </div>
    </td>
    <td>
      <div class="input-group serCol">
        <input type="text" id="fourthCol" onkeyup="searchByCol(3 , 'fourthCol')" placeholder="Contract Size" class="form-control">
      </div>
    </td>
    <td>
      <div class="input-group serCol">
        <input type="text" id="fifthCol" onkeyup="searchByCol(4 , 'fifthCol')" placeholder="Tick Size" class="form-control">
      </div>
    </td>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo1">
      </button>
      COFFEEC
    </td>
    <td> COFFEEC</td>
    <td> 2%</td>
    <td>375</td>
    <td>0.01 </td>
  </tr>
  <tr id="demo1" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2 </p>
      <p> <span>Stop level : </span> 20</p>
      <p> <span>contract size : </span> 375</p>
      <p> <span>Margin currency : </span> USD</p>
      <p> <span>Profit calculation mode : </span>Futures </p>
      <p> <span>Tick value : </span> 3.75 </p>
      <p> <span>Tick Size : </span> 0.01 </p>
      <p> <span>Margin calculation mode : </span> CFD </p>
      <p> <span>Margin hedge : </span>0 </p>
      <p> <span>Margin percentage : </span>2% </p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market </p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50 </p>
      <p> <span>volume step : </span> 0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>00.00 - 22.00 </p>
      <p> <span>Friday : </span> 00.00 - 22.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo2">
      </button>
      COPPER
    </td>
    <td> COPPER</td>
    <td> 2%</td>
    <td>25000 </td>
    <td>0.0001 </td>
  </tr>
  <tr id="demo2" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span> 4</p>
      <p> <span>Stop level : </span>50 </p>
      <p> <span>contract size : </span>25000 </p>
      <p> <span>Margin currency : </span> USD</p>
      <p> <span>Profit calculation mode : </span>Futures </p>
      <p> <span>Tick value : </span> 2.5 </p>
      <p> <span>Tick Size : </span> 0.0001 </p>
      <p> <span>Margin calculation mode : </span> CFD </p>
      <p> <span>Margin hedge : </span>0 </p>
      <p> <span>Margin percentage : </span> 2%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market </p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50 </p>
      <p> <span>volume step : </span> 0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>00.00 - 22.00 </p>
      <p> <span>Friday : </span> 00.00 - 22.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo3">
      </button>
      CORN
    </td>
    <td> CORN</td>
    <td>2% </td>
    <td>50 </td>
    <td>0.25 </td>
  </tr>
  <tr id="demo3" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span> 2</p>
      <p> <span>Stop level : </span> 100</p>
      <p> <span>contract size : </span>50 </p>
      <p> <span>Margin currency : </span> USD</p>
      <p> <span>Profit calculation mode : </span>Futures </p>
      <p> <span>Tick value : </span> 12.5 </p>
      <p> <span>Tick Size : </span> 0.25 </p>
      <p> <span>Margin calculation mode : </span> CFD </p>
      <p> <span>Margin hedge : </span> 0</p>
      <p> <span>Margin percentage : </span>2% </p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market </p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50 </p>
      <p> <span>volume step : </span> 0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>00.00 - 22.00 </p>
      <p> <span>Friday : </span> 00.00 - 22.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo4">
      </button>
      SOYBEAN
    </td>
    <td>SOYBEAN </td>
    <td> 2%</td>
    <td>50 </td>
    <td>0.25 </td>
  </tr>
  <tr id="demo4" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span>2 </p>
      <p> <span>Stop level : </span> 150</p>
      <p> <span>contract size : </span>50 </p>
      <p> <span>Margin currency : </span> USD</p>
      <p> <span>Profit calculation mode : </span>Futures </p>
      <p> <span>Tick value : </span> 12.5 </p>
      <p> <span>Tick Size : </span>  0.25</p>
      <p> <span>Margin calculation mode : </span> CFD </p>
      <p> <span>Margin hedge : </span>0 </p>
      <p> <span>Margin percentage : </span> 2%</p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market </p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50 </p>
      <p> <span>volume step : </span> 0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>01.00 - 13.45 </p>
      <p> <span>Friday : </span> 14.30 - 19.15</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo5">
      </button>
      SUGAR11
    </td>
    <td> SUGAR11</td>
    <td> 2%</td>
    <td>1120 </td>
    <td>0.01 </td>
  </tr>
  <tr id="demo5" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span>10</p>
      <p> <span>Digits : </span> 2</p>
      <p> <span>Stop level : </span> 20</p>
      <p> <span>contract size : </span>1120 </p>
      <p> <span>Margin currency : </span> USD</p>
      <p> <span>Profit calculation mode : </span>Futures </p>
      <p> <span>Tick value : </span> 11.2 </p>
      <p> <span>Tick Size : </span>0.01  </p>
      <p> <span>Margin calculation mode : </span> CFD </p>
      <p> <span>Margin hedge : </span> 0</p>
      <p> <span>Margin percentage : </span>2% </p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market </p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50 </p>
      <p> <span>volume step : </span> 0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>00.00 - 22.00 </p>
      <p> <span>Friday : </span> 00.00 - 22.00</p>
  </tr>
  <tr class="search">
    <td>
      <button id="collapsible" type="button" class="collapsible add" data-toggle="collapse" data-target="#demo6">
      </button>
      WHEAT
    </td>
    <td>WHEAT </td>
    <td> 2%</td>
    <td>50 </td>
    <td>0.05</td>
  </tr>
  <tr id="demo6" class="collapse">
    <td colspan="5">
      <p> <span>spread : </span> floating</p>
      <p> <span>Digits : </span> 2</p>
      <p> <span>Stop level : </span> 100</p>
      <p> <span>contract size : </span>50 </p>
      <p> <span>Margin currency : </span> USD</p>
      <p> <span>Profit calculation mode : </span>Futures </p>
      <p> <span>Tick value : </span> 2.5 </p>
      <p> <span>Tick Size : </span> 0.05 </p>
      <p> <span>Margin calculation mode : </span> CFD </p>
      <p> <span>Margin hedge : </span>0 </p>
      <p> <span>Margin percentage : </span>2% </p>
      <p> <span>Trade : </span>Full access</p>
      <p> <span>Excution : </span>Market </p>
      <p> <span>GTC mode : </span>Pending are good till cancel</p>
      <p> <span>Minimal volume : </span> 0.01</p>
      <p> <span>Maximal volume : </span>50 </p>
      <p> <span>volume step : </span> 0.01</p>
      <p class="white"> <span>Sessions  </span></p>
      <p> <span>Monday : </span>00.00 - 22.00 </p>
      <p> <span>Friday : </span> 00.00 - 22.00</p>
  </tr>

</table>
<!--------- indexes of pagination ----------->
<nav aria-label=...>
  <ul id="pagList"class=pagination>
  </ul>
</nav>
<script>

/******************************Search In All Cols************************/

$(document).ready(function(){
  pagination(5);
  $("#searchTable").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable .search").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $('.collapsible').on("click",function(){
    if($(this).hasClass("remove"))
    {
      $(this).addClass('add');
      $(this).removeClass('remove');
      $(this).parent().parent().css('backgroundColor', 'white');
      $(this).parent().parent().css('border-bottom', '1px solid #ddd');
      $(this).parent().css('backgroundColor', 'white');
    }
    else
    {
      $(this).addClass('remove');
      $(this).removeClass('add');
      $(this).parent().parent().css('backgroundColor', '#fffbf1');
      $(this).parent().parent().css('border-bottom', 'none');
      $(this).parent().css('backgroundColor', '#f1f1f1');
    }

});
});
/******************Search By Col****************************/
function searchByCol(colNum , InputId) {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById(InputId);
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByClassName("search");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[colNum];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
/*******************************************Sort By Col********************/
var toggle=true;
function sortByCol(col) {
  var table, rows, switching, i, x, y, shouldSwitch ,arrows , th ,toggleX , toggleY ;
  table = document.getElementById("myTable");
  th = document.getElementsByTagName("th");
  firstArrows = document.getElementsByClassName("firstArrowImg");
  secondArrows = document.getElementsByClassName("secondArrowImg");
  thirdArrows = document.getElementsByClassName("thirdArrowImg");
  fourthArrows = document.getElementsByClassName("fourthArrowImg");
  firstCol=0;
  secondCol= 1;
  thirdCol= 2;
  fourthCol= 3;
  if(col === 0)
  {
    th[0].style.backgroundColor="#fdc213";
    th[1].style.backgroundColor="#ffc926";
    th[2].style.backgroundColor="#ffc926";
    th[3].style.backgroundColor="#ffc926";
    secondArrows[0].style.display="none";
    secondArrows[1].style.display="none";
    thirdArrows[0].style.display="none";
    thirdArrows[1].style.display="none";
    fourthArrows[0].style.display="none";
    fourthArrows[1].style.display="none";
    toggleArrows = document.getElementsByClassName("firstArrowImg");
  }
  else if(col === 1)
  {
    th[1].style.backgroundColor="#fdc213";
    th[0].style.backgroundColor="#ffc926";
    th[2].style.backgroundColor="#ffc926";
    th[3].style.backgroundColor="#ffc926";
    firstArrows[0].style.display="none";
    firstArrows[1].style.display="none";
    thirdArrows[0].style.display="none";
    thirdArrows[1].style.display="none";
    fourthArrows[0].style.display="none";
    fourthArrows[1].style.display="none";
    toggleArrows = document.getElementsByClassName("secondArrowImg");
  }
  else if(col === 2)
  {
    th[2].style.backgroundColor="#fdc213";
    th[0].style.backgroundColor="#ffc926";
    th[1].style.backgroundColor="#ffc926";
    th[3].style.backgroundColor="#ffc926";
    firstArrows[0].style.display="none";
    firstArrows[1].style.display="none";
    secondArrows[0].style.display="none";
    secondArrows[1].style.display="none";
    fourthArrows[0].style.display="none";
    fourthArrows[1].style.display="none";
    toggleArrows = document.getElementsByClassName("thirdArrowImg");
  }
  else if(col === 3)
  {
    th[3].style.backgroundColor="#fdc213";
    th[0].style.backgroundColor="#ffc926";
    th[1].style.backgroundColor="#ffc926";
    th[2].style.backgroundColor="#ffc926";
    firstArrows[0].style.display="none";
    firstArrows[1].style.display="none";
    secondArrows[0].style.display="none";
    secondArrows[1].style.display="none";
    thirdArrows[0].style.display="none";
    thirdArrows[1].style.display="none";
    toggleArrows = document.getElementsByClassName("fourthArrowImg");
  }
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = document.getElementsByClassName("search");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 0; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      firstX = rows[i].getElementsByTagName("TD")[firstCol];
      secondX=rows[i].getElementsByTagName("TD")[secondCol];
      thirdX=rows[i].getElementsByTagName("TD")[thirdCol];
      fourthX=rows[i].getElementsByTagName("TD")[fourthCol];
      firstY = rows[i + 1].getElementsByTagName("TD")[firstCol];
      secondY=rows[i+1].getElementsByTagName("TD")[secondCol];
      thirdY=rows[i+1].getElementsByTagName("TD")[thirdCol];
      fourthY=rows[i+1].getElementsByTagName("TD")[fourthCol];
      firstX.style.backgroundColor="white";
      secondX.style.backgroundColor="white";
      thirdX.style.backgroundColor="white";
      fourthX.style.backgroundColor="white";
      firstY.style.backgroundColor="white";
      secondY.style.backgroundColor="white";
      thirdY.style.backgroundColor="white";
      fourthY.style.backgroundColor="white";
      if(col === 0)
      {
        firstX.style.backgroundColor="#f5f7fa";
        firstY.style.backgroundColor="#f5f7fa";
        toggleX=firstX;
        toggleY=firstY ;
      }
      if(col === 1)
      {
        secondX.style.backgroundColor="#f5f7fa";
        secondY.style.backgroundColor="#f5f7fa";
        toggleX=secondX;
        toggleY= secondY;
      }
      if(col === 2)
      {
        thirdX.style.backgroundColor="#f5f7fa";
        thirdY.style.backgroundColor="#f5f7fa";
        toggleX=thirdX;
        toggleY=thirdY ;
      }
      if(col === 3)
      {
        fourthX.style.backgroundColor="#f5f7fa";
        fourthY.style.backgroundColor="#f5f7fa";
        toggleX=fourthX;
        toggleY=fourthY ;
      }

      // otherY.style.backgroundColor="white";
      //check if the two rows should switch place:
      if(toggle)
      {
        toggleArrows[0].style.display="none";
        toggleArrows[1].style.display="inline";
        if (toggleX.innerHTML.toLowerCase() > toggleY.innerHTML.toLowerCase())
        {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
      else
      {
        toggleArrows[1].style.display="none";
        toggleArrows[0].style.display="inline";
        if (toggleX.innerHTML.toLowerCase() < toggleY.innerHTML.toLowerCase())
        {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }

    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
  toggle= !toggle;
}
/*----------------------------------------------------------------------pagination--------------------------------------------------------*/
$('#selectedVal').on('change', function()
{
  pagination($(this).val());
});
function pagination(val)
{
  var myDiv = document.getElementById("pagList");
  myDiv.innerHTML = "";
  $(".pagination").append("<li id='previous-page'><a href='javascript:void(0)' aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>"); // Add first page marker
var numberOfItems = $('#myTable .search').length;
 // Get total number of the items that should be paginated
var limitPerPage = val; // Limit of items per each page
$('#myTable .search:gt(' + (limitPerPage - 1) + ')').hide(); // Hide all items over page limits (e.g., 5th item, 6th item, etc.)
for (var i = 0; i < limitPerPage; i++) {
      $("#myTable .search:eq(" + i + ")").show(); // Show items from the new page that was selected
    } // Show items from the new page that was selected

var totalPages = Math.ceil(numberOfItems / limitPerPage); // Get number of pages
 // Get total number of the items that should be paginated
 console.log("ggg",val)
 console.log("ggg",totalPages)
$(".pagination").append("<li class='current-page active'><a href='javascript:void(0)'>" + 1 + "</a></li>"); // Add first page marker

// Loop to insert page number for each sets of items equal to page limit (e.g., limit of 4 with 20 total items = insert 5 pages)
for (var i = 2; i <= totalPages; i++) {
  $(".pagination").append("<li class='current-page'><a href='javascript:void(0)'>" + i + "</a></li>"); // Insert page number into pagination tabs
}
// Add next button after all the page numbers
$(".pagination").append("<li id='next-page'><a href='javascript:void(0)' aria-label=Next><span aria-hidden=true>&raquo;</span></a></li>");
// Function that displays new items based on page number that was clicked
$(".pagination li.current-page").on("click", function() {
  // Check if page number that was clicked on is the current page that is being displayed
  if ($(this).hasClass('active')) {
    return false; // Return false (i.e., nothing to do, since user clicked on the page number that is already being displayed)
  } else {
    var currentPage = $(this).index(); // Get the current page number
    $(".pagination li").removeClass('active'); // Remove the 'active' class status from the page that is currently being displayed
    $(this).addClass('active'); // Add the 'active' class status to the page that was clicked on
    $("#myTable .search").hide(); // Hide all items in loop, this case, all the list groups
    var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page number that was clicked on

    // Loop through total items, selecting a new set of items based on page number
    for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
      $("#myTable .search:eq(" + i + ")").show(); // Show items from the new page that was selected
    }
  }

});

// Function to navigate to the next page when users click on the next-page id (next page button)
$("#next-page").on("click", function() {
  var currentPage = $(".pagination li.active").index(); // Identify the current active page
  // Check to make sure that navigating to the next page will not exceed the total number of pages
  if (currentPage === totalPages) {
    return false; // Return false (i.e., cannot navigate any further, since it would exceed the maximum number of pages)
  } else {
    currentPage++; // Increment the page by one
    $(".pagination li").removeClass('active'); // Remove the 'active' class status from the current page
    $("#myTable .search").hide(); // Hide all items in the pagination loop
    var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page that was selected

    // Loop through total items, selecting a new set of items based on page number
    for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
      $("#myTable .search:eq(" + i + ")").show(); // Show items from the new page that was selected
    }

    $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active'); // Make new page number the 'active' page
  }
});

// Function to navigate to the previous page when users click on the previous-page id (previous page button)
$("#previous-page").on("click", function() {
  var currentPage = $(".pagination li.active").index(); // Identify the current active page
  // Check to make sure that users is not on page 1 and attempting to navigating to a previous page
  if (currentPage === 1) {
    return false; // Return false (i.e., cannot navigate to a previous page because the current page is page 1)
  } else {
    currentPage--; // Decrement page by one
    $(".pagination li").removeClass('active'); // Remove the 'activate' status class from the previous active page number
    $("#myTable .search").hide(); // Hide all items in the pagination loop
    var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page that was selected

    // Loop through total items, selecting a new set of items based on page number
    for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
      $("#myTable .search:eq(" + i + ")").show(); // Show items from the new page that was selected
    }

    $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active'); // Make new page number the 'active' page
  }
});
}
</script>

</body>
</html>
