let previous_check=-1;
let total=0;

function limit()
{
    for(let i=0; i < document.application.chackbox_application.length; i++)
    {
        if(document.application.chackbox_application[i].checked && total===0)
        {
            total++;
            previous_check=i;
            console.log(document.application.chackbox_application.length);
        }

        else if(document.application.chackbox_application[i].checked)
            total++;
        
        if(total > 1)
        {
            document.application.chackbox_application[previous_check].checked = false;
            document.application.chackbox_application[i].checked = true;
            total--;
            previous_check=i;
        }
    }
}