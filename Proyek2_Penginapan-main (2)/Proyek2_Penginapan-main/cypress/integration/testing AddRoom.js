context("Masuk Website", () => {
  it("Testing Add Room", () => {
    cy.request('http://127.0.0.1:8000/').should((response) => {
      expect(200).to.equal(response.status)
    })
  });
 
  it("Login",()=>{
    cy.visit("http://127.0.0.1:8000/")
    cy.contains('Book Now').click()
 
    cy.url().should('include','login')

    cy.get('input[id="username"]').type('admin').should('have.value','admin')
    cy.get('input[id="password"]').type('admin')

    cy.get('button[name="login"]').click()

  });


  it("masuk page AddRoom",()=>{
    cy.get('i[class="fas fa-bars"]').click()
    cy.contains('Ruangan').click()
   cy.get('input[id="username"]').type('admin').should('have.value','admin')
    cy.get('input[id="password"]').type('admin')

    cy.get('button[name="login"]').click()

    cy.get('a[title="tambahRuangan"]').click()

    cy.wait(3000)
    cy.get('input[name="name"]').type('Room 60 Family')
    cy.get('input[name="description"]').type('Family')
    cy.get('input[name="capacity"]').type('4')
    cy.get('input[name="price"]').type('500.000')
    
    cy.contains('Simpan').click()
    cy.wait(2000)
  });

  it("Validasi Room",()=>{
    cy.contains('Room 60 Family')
  })
});