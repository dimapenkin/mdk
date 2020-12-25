#!/bin/bash

# Clone trpo-core repository
git clone git@github.com:rok9ru/trpo-core.git core

# Get current git branch
git symbolic-ref --short -q HEAD > version
