describe("#reseña", () => {
    it("Crea una reseña sin imagen", () => {
        cy.visit("/");

        cy.on("uncaught:exception", () => false);

        cy.contains("Log in");
        cy.contains("Log in").click();

        cy.get('input[name="email"]').type("qwer@qwer.com");
        cy.get('input[name="password"]').type("qwer1234");

        cy.get('input[value="Ingresar"]').click();

        cy.contains("Crear reseña").click({ force: true });

        cy.get('input[name="titulo"]').type("Reseña de prueba");
        cy.get("select").select("Videojuegos");

        const lorem =
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet lacus nec neque consectetur, vel lacinia tellus pulvinar. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In nec erat in lacus vulputate tempus eget eget felis. In nec massa in dolor luctus vestibulum quis quis ante. Nullam tempor nec felis in tristique. Suspendisse potenti. Maecenas nisl massa, molestie non eros quis, vehicula gravida erat. Phasellus fermentum euismod tortor, in congue orci ornare eu. Sed lacinia, neque at vestibulum consectetur, nibh massa suscipit massa, eget lobortis mauris lectus quis enim. Integer congue eu orci vitae sagittis. Duis.";
        cy.get('textarea[name="texto"]').type(lorem);

        /*cy.fixture("testPicture.png").then((fileContent) => {
                cy.get('input[type="file"]').attachFile({
                    fileContent: fileContent.toString(),
                    fileName: "testPicture.png",
                    mimeType: "image/png",
                });
            });*/

        const filepath = "pic/testPicture.png";
        cy.get('input[type="file"]').attachFile(filepath);

        cy.get(".btn-publicar").click();
        cy.visit("/");
        cy.contains("New");
        cy.contains("New").click();
    });
});
