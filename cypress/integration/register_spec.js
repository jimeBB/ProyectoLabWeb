describe("Register", () => {
    it("Registra usuario", () => {
        cy.on("uncaught:exception", () => false);

        cy.visit("/");

        cy.contains("Register").click();
        let r = Math.random().toString(36).substring(7);
        cy.get('input[name="name"]').type(r);
        cy.get('input[name="lname"]').type("Fuentes");
        cy.get('input[name="email"]').type(r + "@itesm.mx");
        cy.get('input[name="password"]').type("Pass123");
        cy.get('input[name="password_confirmation"]').type("Pass123");
        cy.get('input[value="Registrarse"]').click();

        cy.get('input[name="email"]').type(r + "@itesm.mx");
        cy.get('input[name="password"]').type("Pass123");

        cy.get('input[value="Ingresar"]').click();
    });
});
