---
title: Change sw-boolean-radio-group default event
issue: NEXT-28991
flag: VUE3
author: Sebastian Seggewiß
author_email: s.seggewiss@shopware.com
author_github: @seggewiss
---
# Administration
* Changed `sw-boolean-radio-groups` to emit `update:value` instead of `change`
___
# Next Major Version Changes
## sw-boolean-radio-groups default event:
* Change event listeners from `@change="onChange"` to `@update:value="onChange"`