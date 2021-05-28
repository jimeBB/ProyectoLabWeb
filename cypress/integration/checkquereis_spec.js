describe("Revisar queries", () => {
    it("Sin usuario loggeado revisar queries", () => {
        cy.visit("/");

        cy.on("uncaught:exception", () => false);

        cy.contains("Top");
        cy.contains("Top").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("New");
        cy.contains("New").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Cine");
        cy.contains("Cine").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Videojuegos");
        cy.contains("Videojuegos").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Libros");
        cy.contains("Libros").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Series de TV");
        cy.contains("Series de TV").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Otros");
        cy.contains("Otros").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");
    });

    it("Usuario Loggeado", () => {
        cy.visit("/");

        cy.on("uncaught:exception", () => false);

        cy.contains("Log in");
        cy.contains("Log in").click();

        cy.get('input[name="email"]').type("qwer@qwer.com");
        cy.get('input[name="password"]').type("qwer1234");

        cy.get('input[value="Ingresar"]').click();

        cy.on("uncaught:exception", () => false);

        cy.contains("Top");
        cy.contains("Top").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("New");
        cy.contains("New").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Cine");
        cy.contains("Cine").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Videojuegos");
        cy.contains("Videojuegos").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Libros");
        cy.contains("Libros").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Series de TV");
        cy.contains("Series de TV").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");

        cy.contains("Otros");
        cy.contains("Otros").click();

        cy.get(".search-bar");
        cy.get('input[name="termino"]').type("Señor").type("{enter}");
    });
});
