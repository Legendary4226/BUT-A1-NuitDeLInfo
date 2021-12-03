function toggle_search(element_id, fieldset) {
    clicked_button = document.getElementById(element_id)
    fieldset = document.getElementById(fieldset)

    if(clicked_button.classList.contains("activated")) {
        // Supprimer le champ
        let id = element_id + "-input"
        document.getElementById(id + "-container").remove()
    } else {
        // Ajouter le champ
        var input = document.createElement("input")
        input.setAttribute("type", "text")
        input.required = true
        let id = element_id + "-input"
        input.setAttribute("id", id)
        input.setAttribute("name", element_id)

        var label = document.createElement("label")
        label.setAttribute("for", id)
        label.innerHTML = element_id

        var container = document.createElement("span")
        container.setAttribute("id", id + "-container")
        container.append(label)
        container.append(input)

        fieldset.append(container)
    }

    clicked_button.classList.toggle("activated")
}