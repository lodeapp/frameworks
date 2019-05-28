describe.only('Describe runs', () => {
    it('Test runs', () => {
        expect(true).toBe(true)
    })
})

describe('Describe skipped', () => {
    it('Test skipped', () => {
        expect(true).toBe(true)
    })
})

describe('Describe also skipped', () => {
    it('Test also skipped', () => {
        expect(true).toBe(true)
    })
})
