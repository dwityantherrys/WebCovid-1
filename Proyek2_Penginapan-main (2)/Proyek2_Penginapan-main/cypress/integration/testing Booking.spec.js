context("Masuk Website", () => {
  it("Testing Booking Room", () => {
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

  });
  it("Test Booking ", () => {



    cy.get('a[title="bookinguser"]').click()
    cy.get('input[id="username"]').type('user').should('have.value','user')
    cy.get('input[id="password"]').type('user')

    cy.get('button[name="login"]').click()

    cy.wait(1000)
    cy.get('select[name="room_id"]').select('Ruang 9 Twin')
    cy.wait(500)
    cy.get('input[name="date"]').clear().type('2021-10-30')
    cy.contains('Apply').click()
    cy.get('input[name="purpose"]').type('Pariwisata')
    cy.contains('Simpan').click()
  
    cy.wait(2000)

  });

  it("Check Booking telah ada atau tidak",()=>{
    cy.contains('Ruang 9 Twin')
  })


});