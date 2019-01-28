function myfunction()
{

  document.getElementById("submenu").classList.toggle("show-menu");
        
  window.onclick = function(event)
  {
    if (!event.target.matches('.img-btn'))
    {

      var dropdowns = document.getElementsByClassName("submenu-conteudo");
      var i;
      for (i = 0; i < dropdowns.length; i++)
      {
        var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show-menu'))
          {
            openDropdown.classList.remove('show-menu');
          }
      }
    }
  }
}