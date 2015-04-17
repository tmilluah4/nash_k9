
function setActive()
{
    aObj1 =   document.getElementById('navSidebar').getElementsByTagName('li');
    aObj2 =   document.getElementById('navSidebar').getElementsByTagName('a');
    for(i=0;i<aObj2.length;i++)
    {
        if(document.location.href.indexOf(aObj2[i] )>=0)
        {
            aObj1[i].className='active';

        }
    }
}
window.onload = setActive;