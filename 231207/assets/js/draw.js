function createCanvas(){

    var side = window.prompt("Input the Canavs size");
    var tbody = document.getElementById( "tablebody" );
    for ( var i = 0; i < side; ++i ){
        var row = document.createElement( "tr" );
        for ( var j = 0; j < side; ++j ){
            
            var cell = document.createElement( "td" );
            row.appendChild( cell );
        }
        tbody.appendChild( row );
    }
    document.getElementById( "canvas" ).addEventListener("mousemove", processMouseMove, false );
}


function processMouseMove( e )
{
    if ( e.target.tagName.toLowerCase() == "td" ){
        if ( e.shiftKey ){
            var x= document.forms;
            e.target.setAttribute( "style", "background-color: "+ x[0].selector.value);
        }
        if ( e.ctrlKey ){
            e.target.setAttribute( "style", "background-color: transparent;" );
        }
    }
}
window.addEventListener( "load", createCanvas, false );

