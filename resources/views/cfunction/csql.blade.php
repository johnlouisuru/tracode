@extends('main.navcon')
@section('content')
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1><font color="red"><center>C#</center></font></h1>
  <a href="/cinheritance">Inheritance</a>
  <a href="/carray">Create An Array</a>
  <a href="/csql">Sql Server</a>
</div>

<span style="font-size:30px;cursor:pointer; padding: 20px;" onclick="openNav()">&#9776; open</span>
  
  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>

<div class="container">

<div style="margin-left: 200px;">
    <center><h1 style="margin-left: -80px;">Sql Server connection string</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS">  connetionString="Data Source=ServerName;<br>
  Initial Catalog=DatabaseName;User ID=UserName;Password=Password"</p></h4></center>

  <div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
<pre><h6 ><p style="font-family: Courier New"> 
      //If you have a named instance of SQL Server, you'll need to add that as well.

      "Server=localhost\sqlexpress"
      
      /*When the connection is established , 
      SQL Commands will execute with the help of the Connection 
      Object and retrieve or manipulate the data in the database.
      Once the Database activities is over Connection should be
      closed and release the Data Source resources*/
      
      cnn.Close();

      using System;<br>
      using System.Windows.Forms;
      using System.Data.SqlClient;
      namespace WindowsApplication1
      {
      public partial class Form1 : Form
      {
      public Form1()
      {
      InitializeComponent();
      }
      private void button1_Click(object sender, EventArgs e)
      {
      string connetionString = null;
      SqlConnection cnn ;
      connetionString = "Data Source=ServerName;Initial Catalog=DatabaseName;
      User ID=UserName;Password=Password"
      cnn = new SqlConnection(connetionString);
      try
      {
      cnn.Open();
      MessageBox.Show ("Connection Open ! ");
      cnn.Close();
      }
      catch (Exception ex)
      {
      MessageBox.Show("Can not open connection ! ");
      }
      }
      }
      }

</p>
</h6>
</pre>
</div>
     
         </div>
    
@endsection