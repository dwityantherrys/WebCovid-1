context("Masuk Website", () => {
  it("Testing Login", () => {
    cy.request('http://127.0.0.1:8000/').should((response) => {
      expect(200).to.equal(response.status)
    })
  });
 
  it("Login",()=>{
    cy.visit("http://127.0.0.1:8000/")
    cy.contains('Book Now').click()
 
    cy.url().should('include','login')

    cy.get('input[id="username"]').type('user').should('have.value','user')
    cy.get('input[id="password"]').type('user')

    cy.get('button[name="login"]').click()

    cy.contains('Hi, User')
  });


});