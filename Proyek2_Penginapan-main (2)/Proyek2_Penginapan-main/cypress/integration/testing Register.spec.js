context("Masuk Website", () => {
  it("Testing register", () => {
    cy.request('http://127.0.0.1:8000/').should((response) => {
      expect(200).to.equal(response.status)
    })
  });
 
  it("Masuk Page register ", () => {
    cy.visit("http://127.0.0.1:8000/")
    cy.contains('Book Now').click()
    cy.contains('Register disini').click()

    cy.url().should('include','register')
    cy.get('input[placeholder="nama lengkap"]').type('UserTherrys').should('have.value','UserTherrys')
    cy.get('input[id="username"]').type('UserT').should('have.value','UserT')
    cy.get('input[id="email"]').type('UserT@gmail.com').should('have.value','UserT@gmail.com')
    cy.get('input[id="password"]').type('123456789').should('have.value','123456789')
    cy.get('input[name="password_confirmation"]').type('123456789').should('have.value','123456789')
   	cy.wait(10000)
   	cy.get('button[name="register"]').click()
   	cy.wait(5000)
  });

  it("Login Menggunakan Akun baru",()=>{
  	cy.contains('Book Now').click()
  	cy.wait(2000)
  	cy.url().should('include','login')
  	cy.wait(2000)
    cy.get('input[id="username"]').type('UserT').should('have.value','UserT')
    cy.get('input[id="password"]').type('123456789')
   	cy.wait(10000)
   	cy.get('button[name="login"]').click()
   	cy.wait(5000)
  });

  it("Check masuk dengan akun yang benar",()=>{
  	cy.url().should('include','masuk')
   	cy.contains("Hi, UserTherrys")
  })
});