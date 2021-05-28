describe("#comentario", () => {
    it("Crea un comentario", () => {
        cy.visit("/");

        cy.on("uncaught:exception", () => false);

        cy.contains("Log in");
        cy.contains("Log in").click();

        cy.get('input[name="email"]').type("qwer@qwer.com");
        cy.get('input[name="password"]').type("qwer1234");

        cy.get('input[value="Ingresar"]').click();

        cy.on("uncaught:exception", () => false);

        cy.contains("Leer más").click({ force: true });

        cy.get('textarea[name="texto"]').type("Comentario de prueba.");

        cy.contains("Comentar").click();
    });
});
