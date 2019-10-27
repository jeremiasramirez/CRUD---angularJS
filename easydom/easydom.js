
    function windowTemplate(){
        let templateWindow = document.createElement("div");
            templateWindow.setAttribute("class", "templateWindow");
            templateWindow.setAttribute("id", "templateWindow");
            document.body.appendChild(templateWindow);
    }




    function windowError(title="title error", msj="Description error") {
        windowTemplate();
        //container window
        let containerWindow = document.getElementById("templateWindow");

        let titleWindow = document.createElement("h1");
            titleWindow.setAttribute("class", "titleWindow");
            titleWindow.setAttribute("id", "titleWindow");
            titleWindow.textContent = title;


        let messageWindow = document.createElement("p");
            messageWindow.setAttribute("class", "messageWindow");
            messageWindow.setAttribute("id", "messageWindow");
            messageWindow.textContent = msj;

        let buttonOk = document.createElement("button");
            buttonOk.setAttribute("class", "buttonOk");
            buttonOk.setAttribute("id", "buttonOk");
            buttonOk.textContent = "OK";

        let windowErr = document.createElement("div");
            windowErr.setAttribute("class", "windowError");
            windowErr.setAttribute("id", "windowError");

            windowErr.appendChild(titleWindow);
            windowErr.appendChild(messageWindow);
            windowErr.appendChild(buttonOk);




        if (containerWindow) {
            containerWindow.appendChild(windowErr);
        }

        let buttonClose = document.getElementById("buttonOk");
        let templateWindow = document.getElementById("templateWindow");

         if(buttonClose){
             buttonClose.addEventListener("click", function(){
                 templateWindow.classList.add("out");

                 setTimeout(()=>{
                     document.getElementById("templateWindow").remove();
                 },200);

             })
         }
        if(templateWindow){
            templateWindow.addEventListener("click", function(){
                templateWindow.classList.add("out");

                setTimeout(()=>{
                    document.getElementById("templateWindow").remove();
                },200);

            })
        }

    }




    let err = document.getElementById("error");
    if(err){
        err.addEventListener("click",function(){
            windowError("Campos vacios", "No puede haber campos vacios");
        });

    }
