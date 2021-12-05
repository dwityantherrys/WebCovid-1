context("Masuk Website", () => {
  it("Testing Change Pass", () => {
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

  it("masuk page ChangePass",()=>{
    cy.get('i[class="fas fa-bars"]').click()
    cy.contains('Ganti Password').click()

    cy.get('input[name="current_password"]').type('user')
    cy.get('input[name="new_password"]').type('user1234')
    cy.get('input[name="new_password_confirmation"]').type('user1234')
    cy.wait(3000)
    cy.contains('Simpan').click()
    cy.wait(2000)
  }); 

});