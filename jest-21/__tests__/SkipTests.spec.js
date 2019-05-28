describe('Describe runs', () => {
    it.only('Test runs', () => {
        expect(true).toBe(true)
    })
    it('Test skipped', () => {
        expect(true).toBe(true)
    })
    it('Test also skipped', () => {
        expect(true).toBe(true)
    })
})

describe('Describe skipped', () => {
    it('Test skipped', () => {
        expect(true).toBe(true)
    })
})
