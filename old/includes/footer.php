
      <hr>
        
         <div class="footer">
        <p>&copy; SenSys 2014</p>
      </div>
      
</div>

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script language="javascript">

var pathArray = document.URL.split('/');

$("#" + pathArray[4]).addClass("active");

if (pathArray[4] == "")
{
	$("#home").addClass("active");
}

</script>

</body>
</html>
