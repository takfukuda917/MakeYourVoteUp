function loadXMLDoc(searchValue, tagName) {
  //console.log(searchValue);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this, searchValue, tagName);
    }
  };
  xmlhttp.open("GET", "xml/mps.xml" , true);
  xmlhttp.send();
}

function myFunction(xml, searchValue, tagName) {
  var x, i, xmlDoc, table;
  xmlDoc = xml.responseXML;
  table = "<tr><th>Name</th><th>Province</th/><th>Constituency</th><th>Party</th></tr>";
  x = xmlDoc.getElementsByTagName("MemberOfParliament");
  
  for (i = 0; i < x.length; i++) {
    // "CaucusShortName" is the party
    var entry = x[i];
    if( searchValue != ''){
      var valueOfCurrentEntry = getElementNodeValueByTagName( entry, tagName );
    }
    //console.log( partyOfCurrentEntry );
    if ( valueOfCurrentEntry==searchValue   ||     searchValue== '' ){
      table += "<tr><td>" +
      getElementNodeValueByTagName( entry, "PersonOfficialFirstName" ) + ' ' + getElementNodeValueByTagName( entry, "PersonOfficialLastName") +
      "</td><td>" +
      getElementNodeValueByTagName( entry, "ConstituencyProvinceTerritoryName") +
      "</td><td>" +
      getElementNodeValueByTagName( entry, "ConstituencyName") +
      "</td><td>" +
      getElementNodeValueByTagName( entry, "CaucusShortName") +
      "</td></tr>";
    }
  }
  document.getElementById("mp").innerHTML = table;
}


function getElementNodeValueByTagName( entry, tagName ){
  return entry.getElementsByTagName(tagName)[0].childNodes[0].nodeValue;  
}