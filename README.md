# SandboxBlock (Omeka S custom block)

A minimal Omeka S module that adds a **“Hello World”** site-page block. Built to practice extending Omeka with a custom PHP block layout, clean file structure, and documentation.


## Goals

* Create a first PHP “sandbox” block (Hello World).
* Install, enable, and add the block to a Site page.
* Commit the code + docs to GitHub.

---

## Installation

### A) Place the module

Copy the folder into your Omeka S `modules/` directory:

```
/path/to/omeka-s/modules/SandboxBlock/
```

Expected structure:

```
SandboxBlock/
├── Module.php
├── config/
│   └── module.config.php
    └── module.ini
├── src/
│   └── Site/
│       └── BlockLayout/
│           └── HelloWorld.php
└── view/
    └── common/
        └── block-layout/
            └── hello-world.phtml
```

### B) Enable the module

1. In the Omeka admin: **Modules → SandboxBlock → Install**.

## Usage

1. Admin → **Sites → [Your Site] → Pages**
2. Create/Edit a page → **Add block**
3. Pick **“Hello World (Sandbox)”** → **Add** → **Save**
4. View the public page — you should see the message rendered by the block.


---

## Verifying it’s working

* Module shows up in **Admin → Modules** with an **Install/Activate** button.
* In **Site → Pages → Add block**, you can select **Hello World (Sandbox)**.
* On the public page, your message renders.

---

## Common pitfalls + ones I encountered & fixes

| Symptom                                | Likely Cause                                                                | Fix                                                                                                   |
| -------------------------------------- | --------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| “Invalid config/module.ini”            | Wrong format, wrong path, extra section header (for 4.x), smart quotes, BOM | Ensure `[info]` header for 3.x; plain quotes; UTF-8 (no BOM); correct path `/SandboxBlock/module.ini` |
| “Declaration must be compatible” fatal | `form()` signature doesn’t match interface                                  | Use the 4-argument signature shown above                                                              |
| Block not listed in editor             | Service not registered or namespace mismatch                                | Check `module.config.php` registration and `namespace`/folder structure                               |
| Blank output                           | Missing/incorrect view path                                                 | Ensure `view_manager.template_path_stack` points to `../view`, and the partial path is correct        |

---



I tested that the hello world block showed up in a page
<img width="1728" height="1082" alt="Screenshot 2025-10-23 at 9 43 13 PM" src="https://github.com/user-attachments/assets/70f25a5c-11b3-466c-a9e8-332de327968b" />


---

If you want, I can tailor this README to your exact repo layout (e.g., your Docker compose service names, screenshots/GIFs of the block in action, and a short “What I learned” section).
