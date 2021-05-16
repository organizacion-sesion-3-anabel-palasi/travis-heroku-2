{ "collection" :
    {
        "title" : "TV Series Database",
            "type" : "tvseries",
            "version" : "1.0",
            "href" : "{{ path_for('tvseries')}}",
      
            "links" : [
                {"rel" : "profile" , "href" : "http://schema.org/TVSeries","prompt":"Perfil"},
                {"rel" : "collection", "href" : "{{ path_for('movies') }}","prompt":"Movies"},
                {"rel" : "collection", "href" : "{{ path_for('books') }}","prompt":"Books"},
                {"rel" : "collection", "href" : "{{ path_for('musicalbums') }}","prompt":"Music Albums"},
                {"rel" : "collection", "href" : "{{ path_for('games') }}","prompt":"Videogames"},
                {"rel" : "collection", "href" : "{{ path_for('tvseries') }}","prompt":"TV Series"}
            ],
      
            "items" : [
                {
                    "href" : "{{ path_for('tvseries') }}/{{ item.id }}",
                        "data" : [
                            {"name" : "name", "value" : "{{ item.name }}", "prompt" : "Nombre de la serie"},
                            {"name" : "numberOfSeasons", "value" : "{{ item.description }}", "prompt" : "Temporadas"},
                            {"name" : "director", "value" : "{{ item.director }}", "prompt" : "Director de la serie"},
                            {"name" : "startDate", "value" : "{{ item.datePublished }}", "prompt" : "Fecha de inicio"}
                        ]
                        } 
	  
            ],
      
            "template" : {
            "data" : [
                {"name" : "name", "value" : "", "prompt" : "Nombre de la serie"},
                {"name" : "numberOfSeasons", "value" : "", "prompt" : "Descripción de la serie"},
                {"name" : "director", "value" : "", "prompt" : "Director de la serie"},
                {"name" : "startDate", "value" : "", "prompt" : "Fecha de inicio"}
            ]
                }
    } 
}




