fn is_remote(module_name: &str) -> bool {
    module_name.starts_with("http")
    // was later fixed
    // module_name.starts_with("http://") || module_name.starts_with("https://")
}
