document.addEventListener("DOMContentLoaded", () => {
    // Data UMKM dalam bentuk array JavaScript
    const umkmData = [
      {
        id: 1,
        name: "Bu Harini",
        location: "RT 02",
        category: "makanan",
        products: "Pepes tahu jamur (tiap hari), bakmi goreng, nasi goreng",
        phone: "085810245923",
        icon: "utensils",
        image: "coba-poster-pkk.webp",
      },
      {
        id: 2,
        name: "Bu Meiti Aris Setyani",
        location: "-",
        category: "makanan",
        products: "Kripik usus re-packing",
        phone: "085729827177",
        icon: "utensils",
        image: "coba-poster-pkk.webp",
      },
      {
        id: 3,
        name: "Bu Tanti",
        location: "RT 02",
        category: "pembibitan",
        products: "Pembibitan",
        phone: "08974831397",
        icon: "seedling",
        image: "coba-poster-pkk.webp",
      },
      {
        id: 4,
        name: "Bu Ngatijo",
        location: "RT 04",
        category: "pembibitan",
        products: "Pembibitan",
        phone: "085729120709",
        icon: "seedling",
        image: "coba-poster-pkk.webp",
      },
      {
        id: 5,
        name: "Bu Umie Nufiyaningsih",
        location: "RT 03 RW 10",
        category: "makanan",
        products: "Peyek",
        phone: "085643700070",
        icon: "utensils",
        image: "coba-poster-pkk.webp",
      },
      {
        id: 6,
        name: "Bu Devi",
        location: "RT 02",
        category: "makanan",
        products: "Gudeg",
        phone: "081326006761",
        icon: "utensils",
        image: "coba-poster-pkk.webp",
      },
      {
        id: 7,
        name: "Bu Siti",
        location: "RT 01",
        category: "makanan",
        products: "Kue basah dan kering",
        phone: "085743219876",
        icon: "birthday-cake",
        image: "coba-poster-pkk.webp",
      },
      {
        id: 8,
        name: "Bu Ratna",
        location: "RT 03",
        category: "fashion",
        products: "Batik dan pakaian tradisional",
        phone: "081234567890",
        icon: "tshirt",
        image: "coba-poster-pkk.webp",
      },
      {
        id: 9,
        name: "Bu Wati",
        location: "RT 02",
        category: "lainnya",
        products: "Kerajinan tangan dari bambu",
        phone: "087654321098",
        icon: "hands",
        image: "coba-poster-pkk.webp",
      },
      {
        id: 10,
        name: "Bu Yanti",
        location: "RT 04",
        category: "makanan",
        products: "Tempe dan tahu homemade",
        phone: "089876543210",
        icon: "utensils",
        image: "coba-poster-pkk.webp",
      },
    ]
  
    const umkmContainer = document.getElementById("umkm-container")
    const viewGridBtn = document.getElementById("view-grid")
    const viewListBtn = document.getElementById("view-list")
    const searchInput = document.getElementById("search-umkm")
    const filterCategory = document.getElementById("filter-category")
  
    // Fungsi untuk membuat card UMKM
    function renderUMKMCards() {
      umkmContainer.innerHTML = ""
  
      umkmData.forEach((umkm, index) => {
        const umkmCard = document.createElement("div")
        umkmCard.className = `col-md-6 col-lg-4 mb-4 umkm-item`
        umkmCard.dataset.category = umkm.category
  
        // Sembunyikan item setelah item ke-6 secara default
        if (index >= 6) {
          umkmCard.style.display = "none"
        }
  
        umkmCard.innerHTML = `
                  <div class="card h-100 border-0 shadow-sm" style="border-radius: 10px; overflow: hidden; transition: all 0.3s ease;">
                      <div class="card-body">
                          <div class="d-flex align-items-center mb-3 umkm-header">
                              <div style="background-color: var(--color-secondary); width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                  <i class="fas fa-${umkm.icon}" style="color: var(--color-primary); font-size: 20px;"></i>
                              </div>
                              <div>
                                  <h5 style="font-family: var(--heading-font); font-weight: 600; margin-bottom: 0; color: var(--color-font-primary2);">
                                      ${umkm.name}</h5>
                                  <span style="font-size: 12px; color: var(--color-font-secondary);">${umkm.location}</span>
                              </div>
                          </div>
                          
                          <!-- Perbaikan container gambar produk -->
                          <div class="product-image-container">
                              <img src="${umkm.image}" alt="${umkm.name} - ${umkm.products}" class="product-image">
                          </div>
                          
                          <div class="mb-3 umkm-product" style="padding-left: 65px;">
                              <p style="color: var(--color-font-primary2); margin-bottom: 5px; font-weight: 500;">
                                  Produk:</p>
                              <p style="color: var(--color-font-secondary); margin-bottom: 0;">${umkm.products}</p>
                          </div>
                          <div class="umkm-contact" style="padding-left: 65px;">
                              <a href="tel:${umkm.phone}" class="btn btn-sm" style="background-color: var(--color-primary); color: white; border-radius: 30px; padding: 5px 15px;">
                                  <i class="fas fa-phone-alt me-2"></i> ${umkm.phone}
                              </a>
                          </div>
                      </div>
                  </div>
              `
  
        umkmContainer.appendChild(umkmCard)
      })
  
      // Tambahkan tombol "Lihat Semua UMKM"
      const showMoreBtn = document.createElement("div")
      showMoreBtn.className = "col-12 text-center mt-3"
      showMoreBtn.innerHTML = `
              <button id="show-more-umkm" class="btn" style="background-color: var(--color-font-primary1); color: white; border-radius: 30px; padding: 10px 25px; font-weight: 500;">
                  Lihat Semua UMKM <i class="fas fa-chevron-down ms-2"></i>
              </button>
          `
      umkmContainer.appendChild(showMoreBtn)
  
      // Tambahkan event listener untuk tombol "Lihat Semua UMKM"
      document.getElementById("show-more-umkm").addEventListener("click", function () {
        const hiddenItems = document.querySelectorAll('.umkm-item[style*="display: none"]')
        const visibleItems = document.querySelectorAll('.umkm-item:not([style*="display: none"])')
  
        if (hiddenItems.length > 0) {
          // Jika ada item yang tersembunyi, tampilkan semua
          hiddenItems.forEach((item) => {
            item.style.display = "block"
          })
          this.innerHTML = 'Tampilkan Lebih Sedikit <i class="fas fa-chevron-up ms-2"></i>'
        } else {
          // Jika semua item sudah ditampilkan, sembunyikan item setelah item ke-6
          const allItems = document.querySelectorAll(".umkm-item")
          allItems.forEach((item, index) => {
            if (index >= 6) {
              item.style.display = "none"
            }
          })
          this.innerHTML = 'Lihat Semua UMKM <i class="fas fa-chevron-down ms-2"></i>'
        }
      })
    }
  
    // Render UMKM cards saat halaman dimuat
    renderUMKMCards()
  
    // Toggle view (grid/list)
    if (viewGridBtn && viewListBtn && umkmContainer) {
      viewGridBtn.addEventListener("click", () => {
        viewGridBtn.style.backgroundColor = "white"
        viewGridBtn.style.color = "var(--color-primary)"
        viewListBtn.style.backgroundColor = "transparent"
        viewListBtn.style.color = "white"
        umkmContainer.classList.remove("list-view")
      })
  
      viewListBtn.addEventListener("click", () => {
        viewListBtn.style.backgroundColor = "white"
        viewListBtn.style.color = "var(--color-primary)"
        viewGridBtn.style.backgroundColor = "transparent"
        viewGridBtn.style.color = "white"
        umkmContainer.classList.add("list-view")
      })
    }
  
    // Fungsi untuk filter UMKM
    function filterUMKM() {
      const searchTerm = searchInput?.value.toLowerCase() || ""
      const category = filterCategory?.value.toLowerCase() || ""
  
      const umkmItems = document.querySelectorAll(".umkm-item")
      let visibleCount = 0
  
      umkmItems.forEach((item) => {
        const title = item.querySelector("h5")?.textContent.toLowerCase() || ""
        const product = item.querySelector(".umkm-product p:nth-of-type(2)")?.textContent.toLowerCase() || ""
        const itemCategory = item.dataset.category?.toLowerCase() || ""
  
        const matchesSearch = title.includes(searchTerm) || product.includes(searchTerm)
        const matchesCategory = category === "" || itemCategory === category
  
        if (matchesSearch && matchesCategory) {
          item.style.display = "block"
          visibleCount++
        } else {
          item.style.display = "none"
        }
      })
  
      // Update tombol "Lihat Semua UMKM" berdasarkan hasil pencarian
      const showMoreBtn = document.getElementById("show-more-umkm")
      if (showMoreBtn) {
        if (searchTerm || category) {
          showMoreBtn.style.display = "none"
        } else {
          showMoreBtn.style.display = "inline-block"
  
          // Reset tampilan jika filter dihapus
          if (!searchTerm && !category) {
            const allItems = document.querySelectorAll(".umkm-item")
            allItems.forEach((item, index) => {
              if (index >= 6) {
                item.style.display = "none"
              } else {
                item.style.display = "block"
              }
            })
            showMoreBtn.innerHTML = 'Lihat Semua UMKM <i class="fas fa-chevron-down ms-2"></i>'
          }
        }
      }
    }
  
    // Event listener untuk pencarian dan filter
    searchInput?.addEventListener("input", filterUMKM)
    filterCategory?.addEventListener("change", filterUMKM)
  })
  